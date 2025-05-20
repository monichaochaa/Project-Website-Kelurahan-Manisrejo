<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BeritaController::class, 'index'])->name('home');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

