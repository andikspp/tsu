<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LisensiController;

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

// Main Page
Route::get('/', function () {
    return redirect(route('home'));
});
Route::get('/home', function () {
    return view('pages.home');
})->name('home');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Tes Uji Kompetensi
Route::get('/tuk', [TukController::class, 'index'])->name('tuk.index');
Route::post('/tuk', [TukController::class, 'store'])->name('tuk.store');
Route::get('/tuk/form', [TukController::class, 'form'])->name('tuk.form');
Route::post('/tuk/form', [TukController::class, 'store'])->name('tuk.store');


// Konsultasi
Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');
Route::get('/konsultasi/lingkungan', [KonsultasiController::class, 'lingkungan'])->name('konsultasi.lingkungan');
Route::get('/konsultasi/k3', [KonsultasiController::class, 'k3'])->name('konsultasi.k3');

// Lisensi
Route::get('/lisensi', [LisensiController::class, 'index'])->name('lisensi.index');

// File
Route::get('/storage/{folder}/{filename}', [TukController::class, 'getImage'])->name('storage');

Auth::routes();
