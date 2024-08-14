<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\FormPenggunaController;
// use App\Http\Controllers\PenggunaController;

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


// Main
Route::get('/', function () {
    return view('home');
});

Route::get('/riwayat-spt', function () {
    return view('riwayat-spt');
});

Route::get('/form-spt', function () {
    return view('form-spt');
});

Route::resource('/buku-tamu', BukuTamuController::class);


// Super Admin
Route::get('/admin-dashboard', function () {
    return view('Super-Admin.admin-dashboard');
});

Route::get('/admin-bukuTamu', function () {
    return view('Super-Admin.admin-bukuTamu');
});

Route::get('/admin-suratTugas', function () {
    return view('Super-Admin.admin-suratTugas');
});

Route::get('/admin-pengguna', function () {
    return view('Super-Admin.admin-pengguna');
});

Route::get('/admin-role', function () {
    return view('Super-Admin.admin-role');
});

Route::get('/admin-masterPegawai', function () {
    return view('Super-Admin.admin-masterPegawai');
});

Route::get('/admin-bidang', function () {
    return view('Super-Admin.admin-bidang');
});


// Resepsionis
Route::get('/resepsionis-dashboard', function () {
    return view('Resepsionis.resepsionis-dashboard');
});

Route::get('/resepsionis-bukuTamu', function () {
    return view('Resepsionis.resepsionis-bukuTamu');
});


// Bidang
Route::get('/bidang-dashboard', function () {
    return view('Bidang.bidang-dashboard');
});

Route::get('/bidang-suratTugas', function () {
    return view('Bidang.bidang-suratTugas');
});


// Forms
Route::get('/form-pengguna', function () {
    return view('Forms.form-pengguna');
});
Route::get('/form-role', function () {
    return view('Forms.form-role');
});

Route::get('/form-bidang', function () {
    return view('Forms.form-bidang');
});

Route::get('/form-masterPegawai', function () {
    return view('Forms.form-masterPegawai');
});

Route::resource('/form-pengguna', FormPenggunaController::class);