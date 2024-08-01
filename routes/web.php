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

<<<<<<< HEAD
Route::get('/Login', function () {
    return view('Login');
});

Route::get('/BukuTamu', function () {
    return view('bukutamu');
=======
Route::get('/', function () {
    return view('home');
>>>>>>> 1b5bf68e9a95cb8e2064e59784be6e62d1885b3e
});
