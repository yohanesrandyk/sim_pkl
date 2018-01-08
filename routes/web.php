<?php

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
//
// Route::get('notif', function () {
//   return view('notify');
// });

// App::before(function($request)
// {
//   View::share('session', );
// });

Route::get('check_absen','CommonController@status_absen');

Route::get('/', function () {
    return "Selamat Datang";
});

Route::get('/home', 'HomeController@index');

Route::get('bidangperusahaan','BidangPerusahaanController@index');
Route::get('bidangperusahaan/destroy/{id}','BidangPerusahaanController@destroy')->name('bidangperusahaan.destroy');

Route::get('perusahaan','PerusahaanController@index');
Route::get('perusahaan/add','PerusahaanController@create');
Route::get('perusahaan/del/{id}','PerusahaanController@destroy');
Route::post('perusahaan/add','PerusahaanController@store');
Route::get('perusahaan/e/{id}','PerusahaanController@edit');
Route::post('perusahaan/e/{id}','PerusahaanController@update');


Route::get('suratpermohonan','SuratController@index');
Route::get('suratpermohonan/add','SuratController@create');

Route::get('siswa', 'SiswaController@index');
Route::get('siswa/add', 'SiswaController@create');
Route::post('siswa/add', 'SiswaController@store');
Route::get('siswa/e/{id}','SiswaController@edit');
Route::post('siswa/e/{id}','SiswaController@update');
Route::get('siswa/del/{id}','SiswaController@destroy');

Route::get('user', 'UserController@index');
Route::get('user/add', 'UserController@create');
Route::post('user/add', 'UserController@store');
Route::get('user/e/{id}','UserController@edit');
Route::post('user/e/{id}','UserController@update');
Route::get('user/del/{id}','UserController@destroy');

Route::get('penempatan', 'PenempatanController@index');
Route::get('penempatan/add/{id}','PenempatanController@create');
Route::post('penempatan/add/{id}', 'PenempatanController@store');

Route::get('jurnal', 'JurnalController@index');
Route::get('jurnal/add', 'JurnalController@create');
Route::post('jurnal/add', 'JurnalController@store');

Route::get('kehadiran', 'KehadiranController@index');
Route::get('kehadiran/add', 'KehadiranController@create');
Route::post('kehadiran/add', 'KehadiranController@store');

Route::get('/logout', function()
{
  Auth::logout();
  return redirect('login');
});
