<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response;
use App\Models\Notulensi;
use App\Models\LokasiRapat;
use App\Models\JenisRapat;
use App\Models\User;
use App\Notifications\NewNotulensiNotify;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use Dompdf\Dompdf;
use Alert;
// use Auth;
use Illuminate\Support\Facades\Auth;
// use File;
use Illuminate\Support\Facades\File;

class NotulensiController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function dashboard()
	{
		$data = Notulensi::orderBy('id', 'DESC')->get();
		view()->share([
			'data' => $data
		]);
		return view('notulensi.dashboard');
	}

	public function create()
	{
		if (Auth::user()->role_id == 2 || Auth::user()->role_id == 1) {
			$lokasi = LokasiRapat::all();
			$pegawai = User::where('role_id', 3)->where('email', '!=', 'pegawai@nora.id')->get();
			$jenis_rapat = JenisRapat::all();
			view()->share([
				'lokasi' => $lokasi,
				'pegawai' => $pegawai,
				'jenis_rapat' => $jenis_rapat
			]);
			return view('notulensi.input');
		} else return redirect()->back()->with('errors', 'Kamu Tidak punya Akses!');
	}

	public function store($value, Request $request)
	{
		$request->validate([
			'no_undangan' => 'required',
			'tgl' => 'required',
			'lokasi' => 'required',
			'waktu' => 'required',
			'id_pemimpin_rapat' => 'required',
			'id_jenis_rapat' => 'required',
			// 'jml_agenda' => 'required',
			// 'tamu' => 'required',
			'detail_rapat' => 'required',
			// 'agenda' => 'required',
			// 'peserta_rapat' => 'required'
		]);

		$data = new Notulensi();
		$data->no_undangan = $request->no_undangan;
		$data->tgl = $request->tgl;
		$data->lokasi = $request->lokasi;
		$data->waktu = $request->waktu;
		$data->id_pemimpin_rapat = $request->id_pemimpin_rapat;
		$data->id_jenis_rapat = $request->id_jenis_rapat;
		$data->jml_agenda = $request->jml_agenda;
		$data->detail_rapat = $request->detail_rapat;
		$data->agenda = $request->agenda;
		$data->notulen_id = Auth::user()->id;

		if ($request->peserta_rapat == NULL && $request->jml_peserta_rapat == NULL) {
			$file = $request->file('file_peserta_rapat');
			$path = 'files';
			$string = rand(22, 5033);
			if ($file != null) {
				$fileName = $string . '___datapeserta_rapat ' . $request->agenda . '__.' . $file->getClientOriginalExtension();
				$file->move($path, $fileName);
				$lokasi = $path . '/' . $fileName;
			} else return redirect()->route('create.notulensi')->with('errors', 'Kamu belum upload file Peserta Rapat!');
			$csvFile = fopen($lokasi, 'r');
			$isHeader = false;
			$jml = 0;
			while (($obj = fgetcsv($csvFile, 1000, ',')) !== FALSE) {
				if (!$isHeader) {
					$peserta[] = $obj[1];
					$email[] = $obj[2];
					$jml++;
				}
				$isHeader = false;
			}
			fclose($csvFile);

			$data->peserta_rapat = implode(',', $email);
			$data->total_peserta = $jml;
		} else {
			$data->peserta_rapat = $request->peserta_rapat;
			$data->total_peserta = $request->jml_peserta_rapat;
		}
		if ($request->tamu != NULL) {
			$data->tamu = implode(',', $request->tamu);
			$tamu = explode(',', $data->tamu);
		} else $data->tamu = 'nulll';
		//--fix-----
		// foreach($tamu as $a){
		//     $emel = User::find($a);
		//     Notification::route('mail' , $emel->email) //Sending mail to subscriber
		//     ->notify(new NewNotulensiNotify($emel->name));
		//     $result[] = $emel->name;
		// }
		// dd($tamu);
		if ($value == 1) {
			if ($request->file_notulensi == NULL)
				return redirect()->route('create.notulensi')->with('errors', 'Kamu belum upload file Notulensi!');
			else {
				$file = $request->file('file_notulensi');
				$path = 'notulensis';
				$string = rand(22, 5033);
				if ($file != null) {
					$fileName = $string . '___data_notulensi_rapat ' . $request->agenda . '__.' . $file->getClientOriginalExtension();
					$file->move($path, $fileName);
					$data->file_notulensi = $path . '/' . $fileName;
				}
				if ($request->tamu != NULL) {
					foreach ($tamu as $a) {
						$emel = User::where('name', $a)->first();
						// dd($emel);
						Notification::route('mail', $emel->email) //Sending mail to subscriber
							->notify(new NewNotulensiNotify($emel->name, $data->file_notulensi, $data->agenda));
						$result[] = $emel->name;
					}
					$data->tamu = implode(',', $result);
				}
				$arr = explode(',', $data->peserta_rapat);
				foreach ($arr as $a) {
					// $emel = User::find($a);
					Notification::route('mail', $a) //Sending mail to subscriber
						->notify(new NewNotulensiNotify('Peserta Rapat', $data->file_notulensi, $data->agenda));
					// $result[] = $emel->name;
				}
				$data->save();
				return redirect()->route('dashboard.notulensi')
					->with('toast_success', 'Data Notulensi Berhasil ditambahkan!');
			}
		} elseif ($value == 2) {
			// $temp = $data;

			$data->save();
			return redirect()->route('live.notulensi', ['id' => $data->id])
				->with('toast_success', 'Data Notulensi Berhasil disimpan!');
		}
	}

	public function live($id)
	{
		$data = Notulensi::findorFail($id);
		view()->share([
			'data' => $data
		]);

		return view('notulensi.live');
	}

	public function storeLive($id, Request $request)
	{
		$request->validate([
			'notulensi_live' => 'required'
		]);

		$data = Notulensi::findorFail($id);
		$dompdf = new Dompdf();
		$dompdf->loadHtml($request->notulensi_live);
		$dompdf->render();
		$Pdf = $dompdf->output();
		$lokasi = 'notulensis/rapat__' . $data->agenda . '__notulensi.pdf';
		file_put_contents($lokasi, $Pdf);
		$data->notulensi_live = $request->notulensi_live;

		$data->file_notulensi = $lokasi;
		// if ($data->tamu != 'nulll') {
		// 	$anu = explode(',', $data->tamu);
		// 	// dd($anu);
		// 	foreach ($anu as $a) {
		// 		$emel = User::find($a);
		// 		Notification::route('mail', $emel->email) //Sending mail to subscriber
		// 			->notify(new NewNotulensiNotify($emel->name, $data->file_notulensi, $data->agenda));
		// 		$result[] = $emel->name;
		// 	}
		// 	$data->tamu = implode(',', $result);
		// }

		$arr = explode(',', $data->peserta_rapat);
		// foreach ($arr as $a) {
		// 	// $emel = User::find($a);
		// 	Notification::route('mail', $a) //Sending mail to subscriber
		// 		->notify(new NewNotulensiNotify('Peserta Rapat', $data->file_notulensi, $data->agenda));
		// 	// $result[] = $emel->name;
		// }
		$data->save();

		return redirect()->route('edit.notulensi', ['id' => $data->id])
			->with('toast_success', 'Data Live Notulensi Berhasil ditambahkan!');
	}

	public function download($id)
	{
		$data = Notulensi::find($id);
		//PDF file is stored under project/public/download/info.pdf
		$file = public_path() . "/" . $data->file_notulensi;
		if (File::exists($file)) {
			$headers = array(
				'Content-Type: application/pdf',
			);
			$filename = substr($data->file_notulensi, 11);
			return Response::download($file, $filename, $headers);
		} else return redirect()->back()->with('warning', 'Mohon maaf file notulensi tidak ditemukan!');
	}

	public function edit($id)
	{
		if (Auth::user()->role_id == 2 || Auth::user()->role_id == 1) {
			$data = Notulensi::findorFail($id);
			$lokasi = LokasiRapat::all();
			$pegawai = User::where('role_id', 3)->where('email', '!=', 'pegawai@nora.id')->get();
			$jenis_rapat = JenisRapat::all();
			view()->share([
				'lokasi' => $lokasi,
				'pegawai' => $pegawai,
				'jenis_rapat' => $jenis_rapat,
				'data' => $data
			]);
			return view('notulensi.edit');
		} else return redirect()->back()->with('errors', 'Kamu Tidak punya Akses!');
	}

	public function delete($id)
	{
		if (Auth::user()->role_id == 2 || Auth::user()->role_id == 1) {
			$data = Notulensi::findorFail($id);
			if (File::exists($data->file_notulensi)) File::delete($data->file_notulensi);
			$data->delete();
			return redirect()->route('dashboard.notulensi')
				->with('toast_success', 'Data Notulensi Berhasil dihapus!');
		} else return redirect()->back()->with('errors', 'Kamu Tidak punya Akses!');
	}

	public function update($value, $id, Request $request)
	{
		$request->validate([
			'no_undangan' => 'required',
			'tgl' => 'required',
			'lokasi' => 'required',
			'waktu' => 'required',
			'id_pemimpin_rapat' => 'required',
			'id_jenis_rapat' => 'required',
			// 'jml_agenda' => 'required',
			// 'tamu' => 'required',
			'detail_rapat' => 'required',
			// 'agenda' => 'required',
			// 'peserta_rapat' => 'required'
		]);
		$data = Notulensi::findorFail($id);
		$data->no_undangan = $request->no_undangan;
		$data->tgl = $request->tgl;
		$data->lokasi = $request->lokasi;
		$data->waktu = $request->waktu;
		$data->id_pemimpin_rapat = $request->id_pemimpin_rapat;
		$data->id_jenis_rapat = $request->id_jenis_rapat;
		$data->jml_agenda = $request->jml_agenda;
		$data->detail_rapat = $request->detail_rapat;
		$data->agenda = $request->agenda;
		$data->notulen_id = Auth::user()->id;

		if ($request->peserta_rapat == NULL && $request->jml_peserta_rapat == NULL) {
			$file = $request->file('file_peserta_rapat');
			$path = 'files';
			$string = rand(22, 5033);
			if ($file != null) {
				$fileName = $string . '___datapeserta_rapat ' . $request->agenda . '__.' . $file->getClientOriginalExtension();
				$file->move($path, $fileName);
				$lokasi = $path . '/' . $fileName;
			} else return redirect()->route('create.notulensi')->with('errors', 'Kamu belum upload file Peserta Rapat!');
			$csvFile = fopen($lokasi, 'r');
			$isHeader = false;
			$jml = 0;
			while (($obj = fgetcsv($csvFile, 1000, ',')) !== FALSE) {
				if (!$isHeader) {
					$peserta[] = $obj[1];
					$email[] = $obj[2];
					$jml++;
				}
				$isHeader = false;
			}
			fclose($csvFile);

			$data->peserta_rapat = implode(',', $email);
			$data->total_peserta = $jml;
		} else {
			$data->peserta_rapat = $request->peserta_rapat;
			$data->total_peserta = $request->jml_peserta_rapat;
		}
		if ($request->tamu != NULL) {
			$data->tamu = implode(',', $request->tamu);
			$arr = explode(',', $data->tamu);
			// dd($arr);
			// $get_id[] = [];
			foreach ($arr as $nama) {
				$user = User::where('name', $nama)->first();
				// dd($user->id);
				$get_id[] = $user->id;
			}
			// dd($get_id);
			$data->tamu = implode(',', $get_id);
		} else $data->tamu = 'nulll';
		//--fix-----
		// foreach($anu as $a){
		//     $emel = User::find($a);
		//     Notification::route('mail' , $emel->email) //Sending mail to subscriber
		//     ->notify(new NewNotulensiNotify($emel->name));
		//     $result[] = $emel->name;
		// }

		if ($value == 1) {
			// if($request->file_notulensi == NULL)
			//     return redirect()->route('create.notulensi')->with('errors', 'Kamu belum upload file Notulensi!');
			// else {
			$file = $request->file('file_notulensi');
			$path = 'notulensis';
			$string = rand(22, 5033);
			if ($file != null) {
				if (File::exists($data->file_notulensi)) File::delete($data->file_notulensi);
				$fileName = $string . '___data_notulensi_rapat ' . $request->agenda . '__.' . $file->getClientOriginalExtension();
				$file->move($path, $fileName);
				$data->file_notulensi = $path . '/' . $fileName;
			}
			// if ($data->tamu != 'nulll') {
			// 	$anu = explode(',', $data->tamu);
			// 	// dd($anu);
			// 	foreach ($anu as $a) {
			// 		$emel = User::find($a);
			// 		Notification::route('mail', $emel->email) //Sending mail to subscriber
			// 			->notify(new NewNotulensiNotify($emel->name, $data->file_notulensi, $data->agenda));
			// 		$result[] = $emel->name;
			// 	}
			// 	$data->tamu = implode(',', $result);
			// }
			if ($request->tamu != NULL) {
				foreach ($get_id as $a) {
					$emel = User::find($a);
					Notification::route('mail', $emel->email) //Sending mail to subscriber
						->notify(new NewNotulensiNotify($emel->name, $data->file_notulensi, $data->agenda));
					$result[] = $emel->name;
				}
				$data->tamu = implode(',', $result);
			}
			$arr = explode(',', $data->peserta_rapat);
			foreach ($arr as $a) {
				// $emel = User::find($a);
				Notification::route('mail', $a) //Sending mail to subscriber
					->notify(new NewNotulensiNotify('Peserta Rapat', $data->file_notulensi, $data->agenda));
				// $result[] = $emel->name;
			}
			$data->save();
			return redirect()->route('dashboard.notulensi')
				->with('toast_success', 'Data Notulensi Berhasil diupdate!');
			// }
		} elseif ($value == 2) {
			// $temp = $data;

			$data->save();
			return redirect()->route('live.notulensi', ['id' => $data->id])
				->with('toast_success', 'Data Notulensi Berhasil diupdate!');
		}
	}
}
