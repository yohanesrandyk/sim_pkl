<?php

use App\Http\Controllers\BidangPerusahaanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\PenempatanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratPengantarController;
use App\Http\Controllers\SuratPermohonanController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\PersyaratanController;

/*
|---------------------------------------------------------------------|-----
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Route::get('notify', function () {
//   event(new App\Events\StatusLiked('Someone'));
//   return "Event has been sent!";
// });

// Route::get('notif', function () {
//   return view('notify');
// });

// App::before(function($request)
// {
//   View::share('session', );
// });

Route::get('check_absen','CommonController@status_absen');

Route::get('/', function () {
    if(Auth::user()){
      return redirect('home');
    }else{
      return redirect('login');
    }
});

Route::get('home', function () {
    if(Auth::user()){
      return (new DashboardController)->index();
    }else{
      return redirect('login');
    }
});

//bkk

Route::get('referensi', function(){
  if(Auth::user()->id_role==1){
    return (new ReferensiController)->index();
  }else{
    return view('404');
  }
});
Route::get('rayon/add', function(){
  if(Auth::user()->id_role==1){
    return (new ReferensiController)->create_rayon();
  }else{
    return view('404');
  }
});
Route::get('rombel/add', function(){
  if(Auth::user()->id_role==1){
    return (new ReferensiController)->create_rombel();
  }else{
    return view('404');
  }
});
Route::get('jurusan/add', function(){
  if(Auth::user()->id_role==1){
    return (new ReferensiController)->create_jurusan();
  }else{
    return view('404');
  }
});
Route::post('rayon/add', 'ReferensiController@store_rayon');
Route::post('rombel/add', 'ReferensiController@store_rombel');
Route::post('jurusan/add', 'ReferensiController@store_jurusan');

Route::get('bidangperusahaan', function(){
  if(Auth::user()->id_role==1){
    return (new BidangPerusahaanController)->index();
  }else{
    return view('404');
  }
});
Route::get('bidangperusahaan/destroy/{id}', function($id){
  if(Auth::user()->id_role==1){
    return (new BidangPerusahaanController)->destroy($id);
  }else{
    return view('404');
  }
})->name('bidangperusahaan.destroy');

Route::get('perusahaan', function(){
  if(Auth::user()->id_role==1){
    return (new PerusahaanController)->index();
  }else{
    return view('404');
  }
});
Route::get('perusahaan/add',function(){
  if(Auth::user()->id_role==1){
    return (new PerusahaanController)->create();
  }else{
    return view('404');
  }
});
Route::get('perusahaan/del/{id}',function($id){
  if(Auth::user()->id_role==1){
    return (new PerusahaanController)->destroy($id);
  }else{
    return view('404');
  }
});
Route::post('perusahaan/add','PerusahaanController@store');
Route::get('perusahaan/e/{id}',function($id){
  if(Auth::user()->id_role==1){
    return (new PerusahaanController)->edit($id);
  }else{
    return view('404');
  }
});
Route::post('perusahaan/e/{id}','PerusahaanController@update');


Route::get('suratpermohonan',function(){
  if(Auth::user()->id_role==1){
    return (new SuratController)->index();
  }else{
    return view('404');
  }
});
Route::get('suratpermohonan/add',function(){
  if(Auth::user()->id_role==1){
    return (new SuratController)->create();
  }else{
    return view('404');
  }
});

//bkk, kaprog, pembimbing

Route::get('siswa', function(){
  if(Auth::user()->id_role == 1 || Auth::user()->id_role == 2 || Auth::user()->id_role == 4){
    return (new SiswaController)->index();
  }else{
    return view('404');
  }
});

//end

Route::get('siswa/add', function(){
  if(Auth::user()->id_role==1){
    return (new SiswaController)->create();
  }else{
    return view('404');
  }
});
Route::post('siswa/add', 'SiswaController@store');
Route::get('siswa/e/{id}',function($id){
  if(Auth::user()->id_role==1){
    return (new SiswaController)->edit($id);
  }else{
    return view('404');
  }
});
Route::post('siswa/e/{id}','SiswaController@update');
Route::get('siswa/del/{id}',function($id){
  if(Auth::user()->id_role==1){
    return (new SiswaController)->destroy($id);
  }else{
    return view('404');
  }
});

Route::get('user', function(){
  if(Auth::user()->id_role==1){
    return (new UserController)->index();
  }else{
    return view('404');
  }
});
Route::get('user/add', function(){
  if(Auth::user()->id_role==1){
    return (new UserController)->create();
  }else{
    return view('404');
  }
});
Route::post('user/add', 'UserController@store');
Route::get('user/e/{id}',function($id){
  if(Auth::user()->id_role==1){
    return (new UserController)->edit($id);
  }else{
    return view('404');
  }
});
Route::post('user/e/{id}','UserController@update');
Route::get('user/del/{id}',function($id){
  if(Auth::user()->id_role==1){
    return (new UserController)->destroy($id);
  }else{
    return view('404');
  }
});

//endbkk

//kaprog

Route::get('penempatan', function(){
  if(Auth::user()->id_role==2){
    return (new PenempatanController)->index();
  }else{
    return view('404');
  }
});
Route::get('penempatan/add/{id}',function($id){
  if(Auth::user()->id_role==2){
    return (new PenempatanController)->create($id);
  }else{
    return view('404');
  }
});
Route::post('penempatan/add/{id}', 'PenempatanController@store');

//endkaprog

//Siswa

Route::get('jurnal', function(){
  if(Auth::user()->status == 3){
    return (new JurnalController)->index();
  }else{
    return view('404');
  }
});
Route::get('jurnal/add', function(){
  if(Auth::user()->status == 3){
    return (new JurnalController)->create();
  }else{
    return view('404');
  }
});
Route::get('kehadiran', function(){
  if(Auth::user()->status == 3){
    return (new KehadiranController)->index();
  }else{
    return view('404');
  }
});
Route::get('kehadiran/add', function(){
  if(Auth::user()->status == 3){
    return (new KehadiranController)->create();
  }else{
    return view('404');
  }
});
Route::post('jurnal/add', 'JurnalController@store');
Route::post('kehadiran/add', 'KehadiranController@store');
Route::post('home', 'DashboardController@set_area');

//endsiswa

//pengisipersyaratan

Route::get('persyaratan', function(){
  if(Auth::user()->id_role == 2 || Auth::user()->id_role > 3){
    return (new PersyaratanController)->index();
  }else{
    return view('404');
  }
});
Route::post('persyaratan', 'PersyaratanController@store');

//endpengisipersyaratan


//endbkk

Route::get('/logout', function()
{
  Auth::logout();
  return redirect('login');
});

