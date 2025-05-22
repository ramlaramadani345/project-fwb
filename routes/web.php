<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
Route::get('/', function () {
    return view('welcome');
});

//penyewa
Route::get('/beranda', [Dashboard::class, 'Index'])->name('beranda');
Route::get('/kontak', [Dashboard::class, 'contact'])->name('kontak');
Route::get('/mobil', [Dashboard::class, 'mobil'])->name('mobil');
Route::get('/detail', [Dashboard::class, 'detail'])->name('detail');
Route::get('/pemesanan', [Dashboard::class, 'pemesanan'])->name('pemesanan');
//admin
Route::get('/dashboard-admin', [AdminController::class, 'Index'])->name('dashboard');
//register
Route::get('/register-penyewa', [AuthController::class, 'RegisterPenyewa'])->name('registerpenyewa');
Route::post('/registrasi/penyewa', [AuthController::class, 'submitRegistrasiPenyewa'])->name('registrasi.penyewa');

Route::get('/register-owner', [AuthController::class, 'RegisterOwner'])->name('registerowner');
Route::post('/registrasi/owner', [AuthController::class, 'submitRegistrasiOwner'])->name('registrasi.owner');

// Login & Logout
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

