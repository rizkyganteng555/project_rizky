<?php
use App\Models\Siswa;
use App\Models\Sekolah;
use App\Models\film;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FrontController;


use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return '<h1>Halo</h1>';

});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
    .'selamat datang di webapp saya<br>'
    .'laravel,emang keren';
});

// route basic passing data to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey","dragonfly","tiger","butterfly","crocodile"];
    return view ('animals_page',compact('king','hewan'));
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Rizky muhammad R";
    $jenis = "laki laki";
    $pendidikan = "SMK";
    $pekerjaan = "pelajar";

    return view('biodata', compact('nama', 'jenis', 'pendidikan', 'pekerjaan'));

});

// parameter
Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample',compact('nama2'));
});

Route::get('siswa', function(){
    return view('siswa');
});

Route::get('sekolah', function () {
 return view('sekolah');
});

Route::get('album', function () {
 return view('album');
 //return Album::all();
});

Route::get('film', function () {
 return view('film');
});

Route::get('film/{id}', function (int $id) {
 return view('detail-film', ['film' => Film::find($id)]);
});

//route with controller
Route::get('perkenalan', [App\Http\Controllers\MyController::class,'introduce']);

Route::get('hewan', [App\Http\Controllers\MyController::class, 'animals']);

// route movie
Route::get('movie', [MovieController::class, 'getMovie']);
Route::get('movie/{id}',[movieController::class,'GetMovieById']);

Route::get('artikel', [ArtikelController::class, 'getArtikel']);

Route::get('artikel/id/{id}', [ArtikelController::class, 'getArtikelById']);

Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('penulis', PenulisController::class);

Route::resource('genre', GenreController::class);

Route::resource('buku', BukuController::class);

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
Route::resource('penulis', PenulisController::class);
Route::resource('genre', GenreController::class);
Route::resource('buku', BukuController::class);
});

// Route guest(tamu / pengunjung)
Route::get('/',[FrontController::class, 'buku']);
Route::get('buku{id}',[FrontController::class, 'detailbuku']);
