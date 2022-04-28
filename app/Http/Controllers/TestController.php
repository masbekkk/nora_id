<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Test;
use App\Notifications\NewNotulensiNotify;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;

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
        $data->save();
        $anu = explode(',',$data->users_id);
        // dd(count($anu));
        // $array[] =  $anu;
        // foreach($anu as $a){
        //     $emel = User::find($a);
        //     Notification::route('mail' , $emel->email) //Sending mail to subscriber
        //     ->notify(new NewNotulensiNotify($emel->name));
        //     $result[] = $emel->name;
        //     // $result[] = $a;
        // }
        $data->users_id = implode(',', $result);
        $data->notulensi = $request->notulensi;
        $data->save();
        // $batas = count($anu);
        // dd($batas);
        // for($i = 0; $i<=$batas; $i++){
        //    $emel = User::where('id', $i+1)->first();
        // //    dd($emel->email);
        //    $result[] = $emel->email;
        // }
        
        return "oke";
        // return $result;

        
    }
}
