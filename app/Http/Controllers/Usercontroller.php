<?php

namespace App\Http\Controllers;

use App\Models\Usersmodel;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    // awal login user
    public function lojin()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        $el = new Usersmodel();
        // cek username dan password exists (ada) di tabel masyarakat
        
        if ($el->where('Username', $request->input('Username'))->where('Password', $request->input('Password'))->exists()) {
            session(['Username' => $request->input('Username')]);
            return redirect('user/dash');
        }
        return back()->with('pesan', 'Username dan password tidak terdaftar');
    }

    public function logout()
    {
        session()->flush();
        return back();
    }
    public function dashboard()
    {
        return view('index');
    }
}
