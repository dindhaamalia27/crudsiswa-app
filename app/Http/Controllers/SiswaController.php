<?php

namespace App\Http\Controllers;

use App\Models\clas;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
     // mengarahkan ke halaman index
    public function index(){
        //siapkan data siswas
        $siswas = user::all();
        return view('siswa.index',compact('siswas'));
    }
    // mengarahkan ke halaman create
     public function create(){

        // siapkan data kelas
        $clases = clas::all();

        //alihkan ke halaman create siswa
        return view('siswa.create', compact('clases'));
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
        'no_handphone' =>'required  | unique:users,email',
       ]);

     //siapa data yanag akan di masukan
      $datasiswa_store =[
        'clas_id'          => $request->kelas,
        'name'             => $request->name,
        'nisn'             => $request->nisn,
        'alamat'           => $request->alamat,
        'email'            => $request->email,
        'password'         => $request->password,
        'no_handphone'     => $request->no_handphone,
    ];
     $datasiswa_store['photo'] = $request->file('photo')->store('profilesiswa','public');
       //masukan data ke tabel User
       User::create($datasiswa_store);
       //arahkan User ke halaman beranda
         return redirect('/');
    }
    //fungsi delete siswa
    public function destroy($id){
        // cari user di dalam database berdasarkan id yang di kirimkan
        $datauser = User::find($id);

        //lakukan delete pada data tersebut jika data user berhasil ada
        if ($datauser !=null){
            Storage::disk('public')->delete($datauser->photo);
            $datauser->delete();
        }

        //kembalikan user kehalaman beranda/home
        return redirect('/');
    }
    // fungsi untuk detail siswa
    public function show($id){      

        // cari data siswa di dalam tabel user dengan id yang dikirimkan
        $datauser = User::find($id);

        //cek apakah datanya ada atau tidak
        if($datauser == null){
            return redirect('/');
        }

            //pindahkan user ke halaman detail siswa dengan mengerjakan data detailnya
        return view('siswa.show',compact('datauser'));

    }
}
