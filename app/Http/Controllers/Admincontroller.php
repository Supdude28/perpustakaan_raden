<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\buku;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //login admin
    public function getLogin()
    {
        return view('admin.loginadmin');
    }
    // end

    // dash
    public function dashmin()
    {
        return view('admin.index');
    }


    public function tambah()
    {
        return view('admin.tambahbuku');
    }

    public function ll()
    {
        return view('admin.regis_admin');
    }

    // end

    public function ceklogin(Request $request)
    {
        $el = new admin();
        // cek username dan password exists (ada) di tabel masyarakat

        if ($el->where('Username', $request->input('Username'))->where('Password', $request->input('Password'))->exists()) {
            session(['Username' => $request->input('Username')]);
            return redirect('dashadmin');
        }
        return back()->with('pesan', 'Username dan password tidak terdaftar');
    }

    // registrasiadmin
    public function adminlist()
    {
        $p = new admin();

        return view('admin.listadmin', ['petse' => $p->all()]);
    }
    public function regispost(Request $request)
    {

        $q = new admin();
        $q->create($request->all());
        return redirect('admin/Registrasi');


        // $iq = new admin();

        // //cek data yang di kirim user

        // $cek = $request->validate([
        //     'username' => 'required|min:6',
        //     'password' => 'required|min:4',
        //     'email' => 'required|min:10',
        //     'namleng' => 'required',
        //     'level' => 'required',
        //     'alamat' => 'required|max:100'
        // ]);
        // $iq->create([
        //     'Username' => $request->username,
        //     'Password' => $request->password,
        //     'Email' => $request->email,
        //     'NamaLengkap' => $request->namleng,
        //     'Level' => $request->level,
        //     'Alamat' => $request->alamat
        // ]);
        // return back()->with('pesan', 'Selamat, Registrasi berhasil');
    }
    // end

    // tambah buku
    public function tambahini(Request $request)
    {
        $q = new buku();
        $q->create($request->all());
        return redirect('admin/tambahbukuk');
    }
    //end

    // hapus
    public function adminhapus($PetugasId)
    {
        $gas =  new admin();
        $gas = $gas->find($PetugasId);
        $gas->delete();
        return back();
    }
    // end

    // data buku

    public function buku()
    {
        $p = new buku();

        return view('admin.databuku', ['mu' => $p->all()]);
    }
    // end
    // edit
    public function adminedit($admin){
        $m = admin::select('*')->where('PetugasID',$admin)->get();
            return view ('admin.edit_admin',['mk99'=>$m]);
    }
    public function admined(Request $request, $admin){
        $iq = admin::where('PetugasID',$admin)->update([
            'Username' => $request->username,
            'Password' => $request->password,
            'Email' => $request->email,
            'NamaLengkap' => $request->namleng,
            'Level' => $request->level,
            'Alamat' => $request->alamat
        ]);
        return redirect('admin/aadminlist');
    }

}
