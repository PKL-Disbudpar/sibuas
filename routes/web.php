<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\FormPenggunaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\FormBidangController;
use App\Http\Controllers\FormRoleController;
use App\Http\Controllers\FormPegawaiController;
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

Route::resource('/form-spt', SuratTugasController::class);

// Route::resource('/buku-tamu', BukuTamuController::class);


// Super Admin
Route::get('/admin-dashboard', function () {
    return view('Super-Admin.admin-dashboard');
});

Route::get('/admin-bukuTamu', function () {
    return view('Super-Admin.admin-bukuTamu');
});

Route::resource('/admin-bukuTamu', BukuTamuController::class);

Route::get('/admin-suratTugas', function () {
    return view('Super-Admin.admin-suratTugas');
});

Route::get('/admin-pengguna', function () {
    return view('Super-Admin.admin-pengguna');
});

Route::resource('/admin-pengguna', FormPenggunaController::class);

Route::get('/admin-role', function () {
    return view('Super-Admin.admin-role');
});

Route::resource('/admin-role', FormRoleController::class);

Route::get('/admin-masterPegawai', function () {
    return view('Super-Admin.admin-masterPegawai');
});

Route::resource('/admin-masterPegawai', FormPegawaiController::class);

// Route::get('/admin-bidang', function () {
//     return view('Super-Admin.admin-bidang');
// });

Route::resource('/admin-bidang', FormBidangController::class);

// Resepsionis
Route::get('/resepsionis-dashboard', function () {
    return view('Resepsionis.resepsionis-dashboard');
});

Route::get('/resepsionis-bukuTamu', function () {
    return view('Resepsionis.resepsionis-bukuTamu');
});

Route::resource('/resepsionis-bukuTamu', BukuTamuController::class);

// Bidang
Route::get('/bidang-dashboard', function () {
    return view('Bidang.bidang-dashboard');
});

Route::get('/bidang-suratTugas', function () {
    return view('Bidang.bidang-suratTugas');
});


// Forms
Route::resource('/form-role', FormRoleController::class)->except(['index']);

Route::get('/form-role', [FormRoleController::class, 'create'])->name('form-role.create');

Route::delete('/role/{id}', [FormRoleController::class, 'destroy'])->name('role.destroy');

Route::resource('/form-bidang', FormBidangController::class)->except(['index']);

Route::get('/form-bidang', [FormBidangController::class, 'create'])->name('form-bidang.create');

Route::resource('/form-pengguna', FormPenggunaController::class)->except(['index']);

Route::get('/form-pengguna', [FormPenggunaController::class, 'create'])->name('form-pengguna.create');

Route::resource('/form-masterPegawai', FormPegawaiController::class)->except(['index']);

Route::get('/form-masterPegawai', [FormPegawaiController::class, 'create'])->name('form-masterPegawai.create');

Route::get('/buku-tamu', [BukuTamuController::class, 'create'])->name('bukutamu.create');

Route::resource('/buku-tamu', BukuTamuController::class)->except(['index']);

Route::delete('/bukuTamu/{id}', [BukuTamuController::class, 'destroy'])->name('bukuTamu.destroy');

