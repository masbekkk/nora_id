<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulensi;
use App\Models\LokasiRapat;
use App\Models\JenisRapat;
use App\Models\User;

class NotulensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // if(Auth::user()->role_id != 3)
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
        $lokasi = LokasiRapat::all();
        $pegawai = User::where('role_id', 3)->get();
        $jenis_rapat = JenisRapat::all();
        view()->share([
            'lokasi' => $lokasi,
            'pegawai' => $pegawai,
            'jenis_rapat' => $jenis_rapat
        ]);
        return view('input');
    }
}
