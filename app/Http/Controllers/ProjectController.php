<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('tampilanberita', [
            'title' => 'Daftar Berita',
            'project' => Berita::allBeritas()
        ]);
    }
    public function show($id) {
        $beritas = Berita::allBeritas();
        $selectedBerita = null;

        foreach ($beritas as $berita) {
            if ($berita['id'] == $id) {
                $selectedBerita = $berita;
                break;
            }
        }

        if ($selectedBerita) {
            return view('detailberita', [
                'title' => 'Detail Berita',
                'berita' => $selectedBerita
            ]);
        } else {
            return redirect('/berita')->with('error', 'Berita tidak ditemukan.');
        }
    }
}
