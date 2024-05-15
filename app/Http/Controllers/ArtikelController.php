<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 //membuat semua data
 public function getArtikel()
 {
  //melihat semua data yang ada pada model "Movie"
  $artikel = Artikel::all();
  //dump data atau melihat isi data dari sebuah variable
  // dd($movies);
  //passing data movie ke view "movie.index"
  return view('artikel.artikel', compact('artikel'));
 }
 public function getArtikelById($id)
 {
  //menampilkan data movie berdasarkan id yang dipilih
  $art = Artikel::findOrFail($id);
  return view('artikel.show', compact('art'));
 }
 public function getArtikelByKategori($kategori)
 {
  //menampilkan data movie berdasarkan id yang dipilih
  $kategoris = Artikel::where('kategori', $kategori)->get();
  return view('artikel.kategori', compact('kategoris'));
 }
}
