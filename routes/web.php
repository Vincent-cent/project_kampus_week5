<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', function () {
    return view('tampilanberita',[
        'project' => Berita::allBeritas()
    ]);
});