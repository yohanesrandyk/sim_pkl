<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

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
        // $user = User::all();
        return view("jurnal.index");
    }
    // public function create(){
    //   return view("user.add");
    // }
    // public function store(Request $req){
    //   $this->validate($req, [
    //     'username' => 'required|string|max:255|unique:users',
    //     'email' => 'required|string|email|max:255|unique:users',
    //     'password' => 'required|string|min:6|confirmed',
    //   ]);
    //   User::create([
    //     "id_role" => "1",
    //     "username" => $req->nama,
    //     "password" => bcrypt($req->password),
    //     "nama" => $req->nama,
    //     "email" => $req->email,
    //     "telp" => $req->telp,
    //     "bod" => $req->bod,
    //     "bop" => $req->bop,
    //     "alamat" => $req->alamat
    //   ]);
    //   return redirect("user");
    // }
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
