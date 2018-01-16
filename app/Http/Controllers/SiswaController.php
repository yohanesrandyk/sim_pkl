<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Siswa;

class siswaObj{
  public $nis, $nama, $rayon, $jurusan, $rombel, $jk, $email, $telp, $alamat, $agama, $bop, $bod;
}

class SiswaController extends Controller
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

    public function write(){
      $siswa = [];
      $x = 1;
      foreach ($get_siswa as $data) {
         $obj = new siswaObj();
         $user = User::where("id", $data->id)->first();
         $obj->nis = $data->nis;
         $obj->nama = $user->nama;
         $obj->rayon = $data->id_rayon;
         $obj->jurusan = $data->id_jurusan;
         $obj->rombel = $data->id_rombel;
         $obj->jk = $data->jk;
         $obj->email = $user->email;
         $obj->telp = $user->telp;
         $obj->alamat = $user->alamat;
         $siswa[$x] = $obj;
         $x++;
      }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
        $get_siswa = Siswa::all();
        $siswa = [];
        $x = 1;
        foreach ($get_siswa as $data) {
           $obj = new siswaObj();
           $user = User::where("id", $data->id)->first();
           $obj->nis = $data->nis;
           $obj->nama = $user->nama;
           $obj->rayon = $data->id_rayon;
           $obj->jurusan = $data->id_jurusan;
           $obj->rombel = $data->id_rombel;
           $obj->jk = $data->jk;
           $obj->email = $user->email;
           $obj->telp = $user->telp;
           $obj->alamat = $user->alamat;
           $siswa[$x] = $obj;
           $x++;
        }
        return view("siswa.index",compact("siswa"));
    }
    public function create(){
      return view("siswa.add");
    }
    public function store(Request $req){
      $this->validate($req, [
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'nis' => 'required|min:8|unique:siswa'
      ]);
      User::create([
        "id_role" => "3",
        "username" => $req->username,
        "password" => bcrypt($req->password),
        "nama" => $req->nama,
        "email" => $req->email,
        "telp" => $req->telp,
        "bod" => $req->bod,
        "bop" => $req->bop,
        "alamat" => $req->alamat,
        "status" => 1
        //status 1 = siswa_created
        //status 2 = siswa_kota_select,
        //status 3 = siswa_wait_to select,
      ]);
      $last_user = User::orderBy("created_at", "desc")->first();
      Siswa::create([
        "nis" => $req->nis,
        "id" => $last_user->id,
        "agama" => $req->agama,
        "jk" => $req->jk
      ]);
      return redirect("siswa");
    }
    public function edit($id){
      $siswa = new siswaObj();
      $data_siswa = Siswa::where("id", $id)->first();
      $data_user = User::where("id", $id)->first();
      $siswa->nama = $data_user->nama;
      $siswa->rayon = $data_siswa->id_rayon;
      $siswa->jurusan = $data_siswa->id_jurusan;
      $siswa->rombel = $data_siswa->id_rombel;
      $siswa->jk = $data_siswa->jk;
      $siswa->agama = $data_siswa->agama;
      $siswa->bop = $data_user->bop;
      $siswa->bod = $data_user->bod;
      $siswa->email = $data_user->email;
      $siswa->telp = $data_user->telp;
      $siswa->alamat = $data_user->alamat;
      return view("siswa.edit", compact("siswa"));
    }
    public function update(Request $req, $id){
      User::where("id", $id)->update([
        "nama" => $req->nama,
        "telp" => $req->telp,
        "bod" => $req->bod,
        "bop" => $req->bop,
        "alamat" => $req->alamat
      ]);
      Siswa::where("id", $id)->update([
        "agama" => $req->agama,
        "jk" => $req->jk
      ]);
      return redirect("siswa");
    }
    public function destroy($id){
      Siswa::where("id", $id)->delete();
      User::where("id", $id)->delete();
      return redirect("siswa");
    }
}
