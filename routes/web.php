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
