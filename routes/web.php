<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita',[BeritaController::class, 'index']);

Route::get('/berita/{id}',[BeritaController::class, 'show']);