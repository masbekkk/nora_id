<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LokasiRapat;
use Alert;

class LokasiRapatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = LokasiRapat::all();
        view()->share([
            'data' => $data
        ]);
        return view('lokasirapat.index');
    }

    public function store(Request $request)
    {
        $data = new LokasiRapat();
        $data->nama = $request->nama;
        $data->save();
        return redirect()->route('lokasi.rapat')
        ->with('toast_success', 'Data Lokasi Rapat Berhasil ditambahkan!');
    }

    public function update($id, Request $request)
    {
        $data = LokasiRapat::find($id);
        $data->nama = $request->nama;
        $data->save();
        return redirect()->route('lokasi.rapat')
        ->with('toast_success', 'Data Lokasi Rapat Berhasil diupdate!');
    }

    public function delete($id)
    {
        LokasiRapat::find($id)->delete();
        return redirect()->route('lokasi.rapat')
        ->with('toast_success', 'Data Lokasi Rapat Berhasil dihapus!');
    }
}
