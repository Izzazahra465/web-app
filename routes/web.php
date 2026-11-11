<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Web;

Route::get('/', function () {
    return 'Hallo Nama ku adalah LARAVEL, salam kenal';
});

Route::get('/about', function () {
    return '<h2>Ini adalah Halaman About</h2>';
});

Route::get('/web', [Web::class, 'home']);
Route::get('/web/profil', [Web::class, 'profil']);

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga'])
    ->name('kalkulator.segitiga');
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga'])
    ->name('kalkulator.segitiga.hitung');