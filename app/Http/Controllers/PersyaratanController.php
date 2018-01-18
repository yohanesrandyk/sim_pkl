<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Persyaratan;
use App\User;
use App\Siswa;
use App\Rayon;
use App\Jurusan;
use App\Pembimbing;

class siswaObj{
  public $nis, $nama, $rayon, $jurusan, $bantara, $nilai, $keuangan, $kesiswaaan, $cbt_prod, $kehadiran_pengayaan, $ujikom, $perpus;
}

class PersyaratanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index(){
        if(Auth::user()->id_role==4){
            $id_rayon = Pembimbing::where("id", Auth::user()->id)->first()->id_rayon;
            $get_siswa = Siswa::where("id_rayon", $id_rayon)->get();
        }else{
            $get_siswa = Siswa::all();
        }
      $siswa = [];
      $x = 1;
      foreach ($get_siswa as $data) {
         $obj = new siswaObj();
         $user = User::where("id", $data->id)->first();
         $syarat = Persyaratan::where("nis", $data->nis)->first();
         $obj->nis = $data->nis;
         $obj->nama = $user->nama;
         $obj->rayon = Rayon::where("id_rayon", $data->id_rayon)->first()->rayon;
         $obj->jurusan = Jurusan::where("id_jurusan", $data->id_jurusan)->first()->jurusan;
         $obj->bantara = $syarat->bantara;
         $obj->nilai = $syarat->nilai;
         $obj->keuangan = $syarat->keuangan;
         $obj->kesiswaan = $syarat->kesiswaan;
         $obj->cbt_prod = $syarat->cbt_prod;
         $obj->kehadiran_pengayaan = $syarat->kehadiran_pengayaan_pkl;
         $obj->ujikel = $syarat->lulus_ujikelayakan;
         $obj->perpus = $syarat->perpustakaan;
         $siswa[$x] = $obj;
         $x++;
      }
      return view("persyaratan.index",compact("siswa"));
    }
    // public function set(Request $req, $id){
    //   $persyaratan = Persyaratan::all();
    //   Persyaratan::where()->update([
    //     "" => 1
    //   ]);
    // }
}
