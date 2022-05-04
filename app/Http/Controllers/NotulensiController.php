<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulensi;
use App\Models\LokasiRapat;
use App\Models\JenisRapat;
use App\Models\User;
use App\Notifications\NewNotulensiNotify;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use Dompdf\Dompdf;
Use Alert;
Use Auth;

class NotulensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $data = Notulensi::all();
        view()->share([
            'data' => $data
        ]);
        return view('dashboard');
    }

    public function create()
    {
        if(Auth::user()->role_id != 2){
            $lokasi = LokasiRapat::all();
            $pegawai = User::where('role_id', 3)->get();
            $jenis_rapat = JenisRapat::all();
            view()->share([
                'lokasi' => $lokasi,
                'pegawai' => $pegawai,
                'jenis_rapat' => $jenis_rapat
            ]);
            return view('input');
        }else return redirect()->back()->with('errors', 'Kamu tidak punya akses!');
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
            'jml_agenda' => 'required',
            'tamu' => 'required',
            'detail_rapat' => 'required',
            'agenda' => 'required',
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

        if($request->peserta_rapat == NULL && $request->jml_peserta_rapat == NULL){
            $file = $request->file('file_peserta_rapat');
            $path = 'files';
            $string = rand(22,5033);
            if ($file != null) {
                $fileName = $string .'___datapeserta_rapat ' .$request->agenda. '__.'.$file->getClientOriginalExtension();
                $file->move($path, $fileName);
                $lokasi = $path . '/' . $fileName;
            }else return redirect()->route('create.notulensi')->with('errors', 'Kamu belum upload file Peserta Rapat!');
            $csvFile = fopen($lokasi, 'r');
            $isHeader = true;
            $jml = 1;
            while(($obj = fgetcsv($csvFile, 1000, ',')) !== FALSE) {
                if(!$isHeader) {
                    $peserta[] = $obj[1];
                    $jml++;
                }
                $isHeader = false;
            }
            fclose($csvFile);
        
            $data->peserta_rapat = implode(',', $peserta);
            $data->total_peserta = $jml;
        }else{
            $data->peserta_rapat = $request->peserta_rapat;
            $data->total_peserta = $request->jml_peserta_rapat;
        }

        $data->tamu = implode(',', $request->tamu);
        $anu = explode(',',$data->tamu);
        //--fix-----
        // foreach($anu as $a){
        //     $emel = User::find($a);
        //     Notification::route('mail' , $emel->email) //Sending mail to subscriber
        //     ->notify(new NewNotulensiNotify($emel->name));
        //     $result[] = $emel->name;
        // }
        
        if($value == 1){
            if($request->file_notulensi == NULL)
                return redirect()->route('create.notulensi')->with('errors', 'Kamu belum upload file Notulensi!');
            else {
                $file = $request->file('file_notulensi');
                $path = 'notulensis';
                $string = rand(22,5033);
                if ($file != null) {
                    $fileName = $string .'___data_notulensi_rapat ' .$request->agenda. '__.'.$file->getClientOriginalExtension();
                    $file->move($path, $fileName);
                    $data->file_notulensi = $path . '/' . $fileName;
                }
                foreach($anu as $a){
                    $emel = User::find($a);
                    Notification::route('mail' , $emel->email) //Sending mail to subscriber
                    ->notify(new NewNotulensiNotify($emel->name, $data->file_notulensi));
                    $result[] = $emel->name;
                }
                $data->tamu = implode(',', $result);
                $data->save();
                return redirect()->route('dashboard.notulensi')
                    ->with('toast_success', 'Data Notulensi Berhasil ditambahkan!');
            }
        }elseif($value == 2){
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

        return view('live');

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
      
        $data->file_notulensi = $lokasi;
        $anu = explode(',', $data->tamu);
        // dd($anu);
        foreach($anu as $a){
            $emel = User::find($a);
            Notification::route('mail' , $emel->email) //Sending mail to subscriber
            ->notify(new NewNotulensiNotify($emel->name, $data->file_notulensi));
            $result[] = $emel->name;
        }
        $data->tamu = implode(',', $result);
        $data->save();
     
        return redirect()->route('dashboard.notulensi')
            ->with('toast_success', 'Data Live Notulensi Berhasil ditambahkan!');
    }
}
