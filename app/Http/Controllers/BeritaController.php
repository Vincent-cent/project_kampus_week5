<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    public function index()
    {
        return view('tampilanberita', [
            'project' => Berita::allBeritas()
        ]);
    }
    public function show($id)
    {
    return view('beritadetail', [
        'berita' => Berita::findBerita($id)
    ]);
    }
    
}
