<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Test;
use App\Notifications\NewNotulensiNotify;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use Dompdf\Dompdf;

class TestController extends Controller
{
    public function index()
    {
        $data = User::all();
        view()->share([
            'users' => $data
        ]);

        return view('test');
    }

    public function show()
    {
        $data = Test::all();
        view()->share([
            'data' => $data
        ]);
        return view('test-dashboard');
    }

    public function coba()
    {
        $hasil = Test::find(8);
        // return $hasil->getParent()->email;
        // $result_datas = json_decode($hasil->users_id);
        // $index = 0; 
        // $oke = 
        // foreach($result_datas as $a){
        //     $result[] = $a->getParent()->email;
        // }
       
        // endforelse
        // return $hasil->getParent()->email;
        $data = explode(',',$hasil->users_id,0);
        $batas = count($data);
        for($i = 0; $i<=$batas; $i++){
           $emel = User::where('id', $i+1)->first();
        //    dd($emel->email);
           $result[] = $emel->email;
        }
        
        return $result;
    }

    public function store(Request $request)
    {
        $data = new Test();
        $data->users_id = implode(',', $request->users);
        $anu = explode(',',$data->users_id);
        //--fix-----
        foreach($anu as $a){
            $emel = User::find($a);
            // Notification::route('mail' , $emel->email) //Sending mail to subscriber
            // ->notify(new NewNotulensiNotify($emel->name));
            $result[] = $emel->name;
        }
        $data->users_id = implode(',', $result);
        $data->notulensi = $request->notulensi;
        $file = $request->file('peserta');
        $path = 'files';
        $string = rand(22,5033);
        if ($file != null) {
            $fileName = $string .'___datapeserta_rapat ' .$request->agenda. '.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);
            $lokasi = $path . '/' . $fileName;
        }
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
       
        $data->peserta = implode(',', $peserta);
        $data->total_peserta = $jml;
        $dompdf = new Dompdf();
        $dompdf->loadHtml($request->notulensi);
        $dompdf->render();
        $Pdf = $dompdf->output();
        $lokasi = 'files/rapat__' . $request->agenda . '__notulensi.pdf';
        file_put_contents($lokasi, $Pdf);
      
        $data->notulensi = $lokasi;
        $data->save();
     
        return "oke";
  
    }
}
