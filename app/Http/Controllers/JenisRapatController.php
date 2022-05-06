<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisRapat;
use Alert;

class JenisRapatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = JenisRapat::all();
        view()->share([
            'data' => $data
        ]);
        return view('jenisrapat.index');
    }

    public function store(Request $request)
    {
        $data = new JenisRapat();
        $data->nama = $request->nama;
        $data->save();
        return redirect()->route('jenis.rapat')
        ->with('toast_success', 'Data Jenis Rapat Berhasil ditambahkan!');
    }

    public function update($id, Request $request)
    {
        $data = JenisRapat::find($id);
        $data->nama = $request->nama;
        $data->save();
        return redirect()->route('jenis.rapat')
        ->with('toast_success', 'Data Jenis Rapat Berhasil diupdate!');
    }

    public function delete($id)
    {
        JenisRapat::find($id)->delete();
        return redirect()->route('jenis.rapat')
        ->with('toast_success', 'Data Jenis Rapat Berhasil dihapus!');
    }
}
