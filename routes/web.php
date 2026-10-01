<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StylistController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\ReservasiController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'prosesLogin']);

Route::middleware('ceklogin')->group(function () {

Route::get('/', function () {
    return view('welcome');
});

//search
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::resource('stylist', StylistController::class);
// Route::put('/stylist/{id}', [StylistController::class, 'update'])->name('stylist.update');

Route::resource('pelanggan', PelangganController::class);
// Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

Route::resource('layanan', LayananController::class);
// Route::put('/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update');

Route::resource('style', StyleController::class);
// Route::put('/style/{id}', [StyleController::class, 'update'])->name('style.update');

Route::resource('reservasi', ReservasiController::class);
// Route::put('/reservasi/{id}', [ReservasiController::class, 'update'])->name('reservasi.update');

Route::get('/logout', [AuthController::class, 'logout']);
});