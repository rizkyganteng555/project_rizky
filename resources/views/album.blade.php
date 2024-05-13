@php
    $album = \App\Models\Album::get();
    //$album2 = \App\Models\Album::find(3);
    $album3 = \App\Models\Album::first();


@endphp
<h1 style="color: blue">Menggunakan Get</h1>
@foreach($album as $data)
    <h1>ID : {{$data->id}}</h1>
    <h1>judul : {{$data->judul}}</h1>
    <h1>tahun : {{$data->tahun}}</h1>
    <h1>cover album : {{$data->cover_album}}</h1>
    <hr>
    <hr>
@endforeach

<h1 style="color: green">Menggunakan Find</h1>
<h1>ID : {{$album2->id ?? '-'}}</h1>
<h1>judul : {{$album2->judul ?? '-'}}</h1>
<h1>tahun : {{$album2->tahun ?? '-'}}</h1>
<h1>cover album : {{$album2->cover_album ?? '-'}}</h1>
<hr>
<hr>

<h1 style="color: yellow">Menggunakan First</h1>
<h1>ID : {{$album3->id ?? '-'}}</h1>
<h1>judul : {{$album3->judul ?? '-'}}</h1>
<h1>tahun : {{$album3->tahun ?? '-'}}</h1>
<h1>cover album : {{$album3->cover_album ?? '-'}}</h1>
<hr>
<hr>