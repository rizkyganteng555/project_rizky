<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penulis;

class FrontController extends Controller
{
    public function buku()
    {
        $buku = Buku::latest()->get();
        $genre = Genre::all();
        $penulis = Penulis::all();
        return view('welcome', compact('buku','genre','penulis'));
    }

    public function detailBuku()
    {
        $buku = Buku::findOrFail($id);
        return view('detail_buku', compact('buku'));
    }
}
