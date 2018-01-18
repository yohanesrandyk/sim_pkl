<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Siswa;
use App\Perusahaan;

class siswaObj{
  public $id, $nis, $nama, $rayon, $jurusan, $rombel, $jk, $email, $telp, $alamat, $agama, $bop, $bod, $id_perusahaan, $status_perusahaan;
}
class perusahaanObj{
  public $id_perusahaan, $perusahaan, $email, $telp, $kota, $jumlah_verified, $jumlah_pending;
}
class PenempatanController extends Controller
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
        $siswa_get = Siswa::all();
        $siswa = [];
        $x = 0;
        foreach ($siswa_get as $data) {
           $obj = new siswaObj();
           $user = User::where("id", $data->id)->first();
           if($user->status==3){
              $obj->nis = $data->nis;
               $obj->nama = $user->nama;
               $obj->jurusan = $data->id_jurusan;

               if ($data->id_perusahaan > 0) {
                 $obj->perusahaan = Perusahaan::where('id_perusahaan', $data->id_perusahaan)->first()->perusahaan;
               }else{
                 $obj->perusahaan = "-";
               }

               if (is_null($data->status_perusahaan)) {
                 $obj->status_perusahaan = "-";
               }elseif ($data->status_perusahaan == 1) {
                 $obj->status_perusahaan = "Terverifikasi";
               }elseif($data->status_perusahaan == 0){
                 $obj->status_perusahaan = "Pending";
               }

               $siswa[$x] = $obj;
               $x++;
           }
        }
        $perusahaan_get = Perusahaan::where('status','1')->get();
        $perusahaan = [];$x = 0;
        foreach ($perusahaan_get as $data) {
          $obj = new perusahaanObj();
          $obj->id_perusahaan = $data->id_perusahaan;
          $obj->perusahaan = $data->perusahaan;
          $obj->email = $data->email;
          $obj->telp = $data->telp;
          $obj->kota = $data->kota;
          $obj->jumlah_verified = Siswa::where([['id_perusahaan', $data->id_perusahaan],['status_perusahaan', '1']])->count();
          $obj->jumlah_pending = Siswa::where([['id_perusahaan', $data->id_perusahaan],['status_perusahaan', '0']])->count();
          $perusahaan[$x] = $obj;$x++;
        }
        return view("penempatan.index",["siswa"=>$siswa, "perusahaan"=>$perusahaan]);
    }
    public function create($id){
      $area = Perusahaan::where('id_perusahaan', $id)->first()->id_area;
      $siswa_get = Siswa::whereNull('id_perusahaan')->where('id_area', $area)->get();$siswa_quo = [];$x = 1;
      foreach ($siswa_get as $data) {
         $obj = new siswaObj();
         $user = User::where("id", $data->id)->first();
         if($user->status==3){
          $obj->nis = $data->nis;
          $obj->jurusan = $data->id_jurusan;
          $obj->nama = $user->nama;
          $obj->id = $data->id;
          $siswa_quo[$x] = $obj;
          $x++;
         }
      }
      $siswa_get = Siswa::where([['id_perusahaan', $id],['status_perusahaan', '0']])->get();$siswa_tmp = [];$x = 1;
      foreach ($siswa_get as $data) {
         $obj = new siswaObj();
         $user = User::where("id", $data->id)->first();
        if($user->status==3){
          $obj->nis = $data->nis;
          $obj->nama = $user->nama;
          $obj->jurusan = $data->id_jurusan;
          $obj->id = $data->id;
          $siswa_tmp[$x] = $obj;
          $x++;
        }
      }
      $thisperusahaan = Perusahaan::where('id_perusahaan',$id)->first();
      return view("penempatan.add",["siswa_quo"=>$siswa_quo,"siswa_tmp"=>$siswa_tmp, "thisperusahaan"=>$thisperusahaan]);
    }
    public function store(Request $req){
      $siswa = explode(',', $req->siswa);
      for ($i=0; $i < count($siswa); $i++) {
        Siswa::where("id", $siswa[$i])->update([
          "id_perusahaan" => $req->perusahaan,
          "status_perusahaan" => $req->status
        ]);
      }
      return redirect('penempatan/add/'.$req->redirect);
    }
}
