<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{nama}', function($nama){
  return "<h1>Hello $nama!</h1>";
});

Route::get('/page2', function(){
  return view('datasiswa', ["Siswa1"=>["andi","bambang"], "Siswa2" => "Nanda", "Siswa3"=>"Nanang Resing"]);
});

Route::get('/about', function(){
  return view('about');
});

Route::get('/siswa', function() {
  return view('siswa', ["Siswa1"=>"andi", "nilai"=>75, "listsis"=>["Nanang Resing","Andi Knalpot", "Bambang Kanebo"]]);
});

Route::get('/home', function(){
  return view('home');
});


Route::get('/page','PageController@index');
Route::get('/siswas', 'PageController@banyaksiswa');
Route::get('/siswas2', 'PageController@banyaksiswas');
Route::get('/daftar', 'DaftarSiswa@index');
Route::post('/daftarSiswa', 'DaftarSiswa@prosesRegister') -> name('form-reg');
