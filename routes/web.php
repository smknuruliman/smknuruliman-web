<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpmbController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ShowartikelController;
use App\Http\Controllers\ProfilsekolahController;
use Illuminate\Support\Facades\Auth;

// ===== route page beranda ===== //
Route::get('/', [BerandaController::class, 'homepage_category']);

// ========= Route page beranda | section kotak saran =========
Route::middleware(['auth'])->group(function () {
    Route::post('/saran/kirim', [SaranController::class, 'store'])->name('saran.kirim');
});
//Route::get('/login', [GoogleController::class, 'login'])->name('login.saran'); // Google OAuth
//Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('Auth.google');
//Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// ===== Route page show artikel berita ======= //
Route::get('/posts/{slug}', [ShowartikelController::class, 'show'])->name('show-artikel');

// ===== Route page SPMB ======= //
Route::get('/pendaftaran-spmb', [SpmbController::class,  'index'])->name('formulir.spmb');
Route::post('/pendaftaran-spmb/store', [SpmbController::class, 'store'])->name('Spmb.store');

// ==========  route profil sekolah  ========= //
Route::get('/profile-sekolah', [ProfilsekolahController::class, 'index']);

// ==========  route profil sekolah  ========= //
Route::get('/jurusan', [JurusanController::class, 'index']);

