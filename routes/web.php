<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/beranda', [Dashboard::class, 'Index'])->name('beranda');
Route::get('/kontak', [Dashboard::class, 'contact'])->name('kontak');
Route::get('/mobil', [Dashboard::class, 'mobil'])->name('mobil');
Route::get('/detail', [Dashboard::class, 'detail'])->name('detail');
Route::get('/pemesanan', [Dashboard::class, 'pemesanan'])->name('pemesanan');