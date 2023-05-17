<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Zeyeng";
});

Route::get('/about', function () {
    return view ('about', [
        "nama" => "Shilma Puspita",
        "umur" => 19,
        "alamat" => "bandung"
    ]);
});

Route::get('/nf', function () {
    return view ('nf', [
        "nama" => "Shilma Puspita",
        "kampus" => "STTNF",
        "jurusan" => "Sistem Informasi"
    ]);
});

Route::get('/week8', function () {
    return view('week8');
});
