<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Jurnal;

// class siswaObj{
//   public $nis, $nama, $rayon, $jurusan, $rombel, $jk, $email, $telp, $alamat, $agama, $bop, $bod;
// }

class JurnalController extends Controller
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
        // Auth::user()->id;
        return view("jurnal.index");
    }
    public function create(){
      return view("jurnal.add");
    }
    public function store(Request $req){
      Jurnal::create([
        "id" => "",
        "divisi" => $req->divisi,
        "bentuk_kegiatan" => $req->bentuk_kegiatan,
        "hasil_pencapaian" => $req->hasil_pencapaian,
        "ket" => $req->ket,
      ]);
      return redirect("user");
    }
    // public function edit($id){
    //   $user = User::where("id", $id)->first();
    //   return view("user.edit", compact("user"));
    // }
    // public function update(Request $req, $id){
    //   User::where("id", $id)->update([
    //     "nama" => $req->nama,
    //     "telp" => $req->telp,
    //     "bod" => $req->bod,
    //     "bop" => $req->bop,
    //     "alamat" => $req->alamat
    //   ]);
    //   return redirect("user");
    // }
    // public function destroy($id){
    //   User::where("id", $id)->delete();
    //   return redirect("user");
    // }
}
