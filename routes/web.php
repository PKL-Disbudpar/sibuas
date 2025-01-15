<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormRoleController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\FormBidangController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\FormPegawaiController;
use App\Http\Controllers\FormPenggunaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RiwayatSPTController;
use App\Models\SuratTugas;

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

Route::get('/riwayat-spt', [RiwayatSPTController::class, 'index'])->name('riwayat-spt.index');
Route::get('/admin-suratTugas', [RiwayatSPTController::class, 'adminSuratTugas'])->name('admin-suratTugas.index');

Route::resource('/login', LoginController::class);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::resource('/form-spt', SuratTugasController::class);
// Route::get('/form-spt', [SuratTugasController::class, 'create'])->name('form-spt.create');
// Route::post('/form-spt', [SuratTugasController::class, 'create'])->name('form-spt.create');
// Route::post('/form-spt', [SuratTugasController::class, 'store'])->name('suratTugas.store');


// Route::resource('/buku-tamu', BukuTamuController::class);

// Route::get('/admin-dashboard', [DashboardController::class, 'index']);

// Super Admin
Route::get('/admin-dashboard', function () {
    return view('Super-Admin.admin-dashboard');
});

Route::get('/admin-bukuTamu', function () {
    return view('Super-Admin.admin-bukuTamu');
});

Route::resource('/admin-bukuTamu', BukuTamuController::class);

// Route::get('/admin-suratTugas', function () {
//     return view('Super-Admin.admin-suratTugas');
// });

Route::resource('/admin-pengguna', FormPenggunaController::class);

Route::get('/admin-role', function () {
    return view('Super-Admin.admin-role');
});

Route::resource('/admin-masterPegawai', FormPegawaiController::class);

// Route::get('/admin-bidang', function () {
//     return view('Super-Admin.admin-bidang');
// });

Route::resource('/admin-bidang', FormBidangController::class);

// Route::resource('/admin-suratTugas', SuratTugasController::class);


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


// Forms role
Route::resource('/admin-role', FormRoleController::class);

Route::resource('/form-role', FormRoleController::class);

Route::get('/form-role', [FormRoleController::class, 'create'])->name('form-bidang.create');

Route::resource('/form-role', FormRoleController::class)->except(['index']);

Route::get('/form-role', [FormRoleController::class, 'create'])->name('form-role.create');

Route::delete('/role/{id}', [FormRoleController::class, 'destroy'])->name('role.destroy');


// Forms bidang
Route::resource('/form-bidang', FormBidangController::class)->except(['index']);

Route::get('/form-bidang', [FormBidangController::class, 'create'])->name('form-bidang.create');

Route::resource('/form-bidang', FormBidangController::class)->except(['index']);

Route::delete('/form-bidang/{id}', [FormBidangController::class, 'destroy'])->name('bidang.destroy');

Route::get('/form-bidang/{id}/edit', [FormBidangController::class, 'edit'])->name('bidang.edit');

Route::put('/form-bidang/{id}', [FormBidangController::class, 'update'])->name('form-bidang.update');


//pengguna
Route::resource('/admin-pengguna', FormPenggunaController::class);

Route::get('/form-pengguna', [FormPenggunaController::class, 'create'])->name('form-pengguna.create');

Route::resource('/form-pengguna', FormPenggunaController::class)->except(['index']);

Route::delete('/form-pengguna/{id}', [FormPenggunaController::class, 'destroy'])->name('pengguna.destroy');

Route::get('/form-pengguna/{id}/edit', [FormPenggunaController::class, 'edit'])->name('pengguna.edit');

Route::put('/form-pengguna/{id}', [FormPenggunaController::class, 'update'])->name('form-pengguna.update');



//pegawai
Route::resource('/admin-masterPegawai', FormPegawaiController::class);

Route::resource('/form-masterPegawai', FormPegawaiController::class)->except(['index']);

Route::get('/form-masterPegawai', [FormPegawaiController::class, 'create'])->name('form-masterPegawai.create');

// Route::delete('/form-masterPegawai/{id}', [FormPegawaiController::class, 'destroy'])->name('pegawai.destroy');

//Master Pegawai
// Route::resource('form-masterPegawai', FormPegawaiController::class)->except(['index']);

// Route::get('/form-masterPegawai', [FormPegawaiController::class, 'create'])->name('form-masterPegawai.create');

Route::delete('/form-masterPegawai/{nip_pegawai}', [FormPegawaiController::class, 'destroy'])->name('pegawai.destroy');

Route::get('form-masterPegawai/{id}/edit', [FormPegawaiController::class, 'edit'])->name('pegawai.edit');

Route::put('/form-masterPegawai/{id}', [FormPegawaiController::class, 'update'])->name('masterPegawai.update');
// Route::put('form-masterPegawai/{nip}', [FormPegawaiController::class, 'update'])->name('form-masterPegawai.update');

// Route::get('form-masterPegawai/{nip}', [FormPegawaiController::class, 'show'])->name('form-masterPegawai.show');

//buku tamu
Route::get('/buku-tamu', [BukuTamuController::class, 'create'])->name('bukutamu.create');

Route::resource('/buku-tamu', BukuTamuController::class)->except(['index']);

Route::delete('/buku-tamu/{id}', [BukuTamuController::class, 'destroy'])->name('bukuTamu.destroy');

// Route::delete('/bukuTamu/{id}', [BukuTamuController::class, 'destroy'])->name('bukuTamu.destroy');
