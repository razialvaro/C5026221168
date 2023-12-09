<?php

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
    return view('index');
});
Route::get('Tugas1', function () {
    return view('tugas1');
});
Route::get('Tugas2', function () {
    return view('tugas2');
});
Route::get('Tugas3', function () {
    return view('tugas3');
});
Route::get('Tugas4', function () {
    return view('tugas4');
});
Route::get('Hello', function () {
    return view('hello');
});
Route::get('Responsive2', function () {
    return view('responsive2');
});

Route::get('Perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('Biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

Route::get('/vga','App\Http\Controllers\VgaController@index');
Route::get('/vga/tambah','App\Http\Controllers\VgaController@tambah');
Route::post('/vga/store','App\Http\Controllers\VgaController@store');
Route::get('/vga/edit/{id}','App\Http\Controllers\VgaController@edit');
Route::get('/vga/view/{id}','App\Http\Controllers\VgaController@view');
Route::post('/vga/update','App\Http\Controllers\VgaController@update');
Route::get('/vga/hapus/{id}','App\Http\Controllers\VgaController@hapus');
Route::get('/vga/cari','App\Http\Controllers\VgaController@cari');

