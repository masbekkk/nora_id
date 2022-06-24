<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;

class SaranController extends Controller
{
    public function index()
    {
        $data = Saran::all();
        view()->share([
            'data' => $data
        ]);
        return view('admin.saran');
    }

    public function store(Request $request)
    {
        $data = new Saran();
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'pesan' => 'required'
        ]);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pesan = $request->pesan;
        $data->save();
        return redirect()->back()->with('success', 'Terima kasih atas Pesan dan Masukannya!');
    }
}
