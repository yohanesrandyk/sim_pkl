<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Siswa;
use App\User;

class DashboardController extends Controller
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
      if (Auth::user()->status==0) {
        return view("dashboard.status0");
      }
      else if (Auth::user()->status==1 || Auth::user()->status==4) {
        return view("dashboard.status1or4");
      }
      else if (Auth::user()->status==2) {
        return view("dashboard.status2");
      }
      else if (Auth::user()->status==3) {
        return view("dashboard.status3");
      }else if (Auth::user()->status==5) {
        return view("dashboard.status5");
      }
    }

    public function set_area(Request $req){
      Siswa::where("id", Auth::user()->id)->update([
        "id_area" => $req->area
      ]);
      User::where("id", Auth::user()->id)->update([
        "status" => 2
      ]);
      return redirect('home');
    }
}
