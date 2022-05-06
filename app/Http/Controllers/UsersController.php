<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
    {
        if(Auth::user()->role_id == 1){
            $data = User::all();
            view()->share([
                'data' => $data
            ]);
            return view('users.index');
        }else return redirect()->back()->with('errors','Kamu Tidak punya Akses!');
    }
    public function chgRoleUser($id, $level){
        if(Auth::user()->role_id == 1){
            $data = User::find($id);
            $data->role_id = $level;
            $data->save();
            Alert::toast('Role User '.$data->name. ' Berhasil diubah', 'success');
        }else{
            Alert::toast('Kamu bukan admin!', 'error');
        }
        return redirect()->route('users');
    }

    public function update($id, Request $request)
    {
        $data = User::findorFail($id);
        $data->email = $request->email;
        $data->name = $request->name;
        return redirect()->route('users')
            ->with('toast_success', 'Data berhasil diupdate!');
        $data->save();
    }

    public function delete($id)
    {
        if(Auth::user()->role_id == 1){
            \App\Models\Notulensi::where('notulen_id', $id)->delete();
            \App\Models\Notulensi::where('id_pemimpin_rapat', $id)->delete();
            User::find($id)->delete();
            return redirect()->route('users')
            ->with('toast_success', 'Data berhasil dihapus!');
        }else return redirect()->back()->with('errors','Kamu Tidak punya Akses!');
    }
}
