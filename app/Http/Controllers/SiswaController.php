<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
     // mengarahkan ke halaman index
    public function index(){
        return view('siswa.index');
    }
    // mengarahkan ke halaman create
     public function create(){
        return view('siswa.create');
     }
     //fungsi store data siswa
    public function store(Request $request){
    // validasi data
       $request->validate([
        'name'         =>'required',
        'nisn'         =>'required',
        'alamat'       =>'required',
        'email'        =>'required | unique:users,email',
        'password'     =>'required',
        'no_handphone' =>'required',
       ]);

     //siapa data yanag akan di masukan
      $datasiswa_store =[
        'clas_id'          => $request->kelas,
        'photo'            => 'foto.jpg',
        'name'             => $request->name,
        'nisn'             => $request->nisn,
        'alamat'           => $request->alamat,
        'email'            => $request->email,
        'password'         => $request->password,
        'no_handphone'     => $request->no_handphone,
    ];


       //masukan data ke tabel User
       User::create($datasiswa_store);
       //arahkan User ke halaman beranda
         return redirect('/');
    }
}
