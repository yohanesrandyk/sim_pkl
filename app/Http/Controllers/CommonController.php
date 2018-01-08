<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Kehadiran;
use Session;

class CommonController extends Controller
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
    public function status_absen()
    {
      $status = Kehadiran::where('created_at', 'like', 'now')->get();
      if(count($status) < 1){
        Session::flash('status_absen', '1');
      }
      return redirect(Session::get('route_last'));
    }
}
