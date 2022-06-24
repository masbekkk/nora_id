<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kost;

class KostController extends Controller{

    public function index()
    {
        $data = Kost::all();
        $jml = Kost::count();

        return response()->json([
            'jml' => $jml,
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new Kost();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->type = $request->type;
        $data->link = $request->link;
        $data->kota = $request->kota;
        $data->provinsi = $request->provinsi;
        $data->alamat = $request->alamat;
        $data->kategori = $request->kategori;
        // $data->user_id = Auth::user()->id;
        $data->nomor_wa = $request->nomor_wa;
        $data->rating = $request->rating;
        $data->mapUrl = $request->mapUrl;
        $data->photos = $request->photos;
        $data->numberOfKitchens = $request->numberOfKitchens;
        $data->numberOfBedrooms = $request->numberOfBedrooms;
        $data->numberOfCupboards = $request->numberOfCupboards;
        if($data->save()) $value = 1;
        else $value = 0;

        return response()->json([
            'value' => $value
        ]);
    }

    public function update($id, Request $request)
    {
        $data = Kost::findOrFail($id);
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->type = $request->type;
        $data->link = $request->link;
        $data->kota = $request->kota;
        $data->provinsi = $request->provinsi;
        $data->alamat = $request->alamat;
        $data->kategori = $request->kategori;
        // $data->user_id = Auth::user()->id;
        $data->nomor_wa = $request->nomor_wa;
        $data->rating = $request->rating;
        $data->mapUrl = $request->mapUrl;
        $data->photos = $request->photos;
        $data->numberOfKitchens = $request->numberOfKitchens;
        $data->numberOfBedrooms = $request->numberOfBedrooms;
        $data->numberOfCupboards = $request->numberOfCupboards;
        if($data->save()) $value = 1;
        else $value = 0;

        return response()->json([
            'value' => $value
        ]);

    }

    public function delete($id)
    {
        $data = Kost::findOrFail($id)->delete();
        if($data)  $value = 1;
        else $value = 0;

        return response()->json([
            'value' => $value
        ]);
    }

    public function storeRating($id, Request $request)
    {
        $data = Kost::findOrFail($id);
        $data->rating = $request->rating;
        if($data->save()) $value = 1;
        else $value = 0;

        return response()->json([
            'value' => $value
        ]);
    }
}

?>