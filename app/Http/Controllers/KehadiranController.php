<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Kehadiran;

// class siswaObj{
//   public $nis, $nama, $rayon, $jurusan, $rombel, $jk, $email, $telp, $alamat, $agama, $bop, $bod;
// }

class KehadiranController extends Controller
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
        $kehadiran = Kehadiran::all();
        $today = count(Kehadiran::where('created_at', 'like' , '%'.date("Y-m-d").'%')->get());
        return view("kehadiran.index", ["kehadiran"=>$kehadiran, "today" => $today]);
    }
    public function create(){
      $today = count(Kehadiran::where('created_at', 'like' , '%'.date("Y-m-d").'%')->get());
      if ($today > 0) {
        return redirect('kehadiran');
      }else{
        return view("kehadiran.add");
      }
    }
    public function store(Request $req){
      Kehadiran::create([
        "id" => "2",
        "divisi" => $req->divisi,
        "datang" => $req->datang,
        "pulang" => $req->pulang,
        "ket" => $req->ket,
      ]);
      return redirect("kehadiran/add");
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
