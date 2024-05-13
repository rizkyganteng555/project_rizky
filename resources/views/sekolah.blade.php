@php
$sekolah = \App\Models\Sekolah::all();
@endphp

<h1>Daftar Sekolah Smk Yang Ada Jurusan Rpl Di Bandung</h1>
@foreach($sekolah as $data)

<h1>Nama sekolah : {{ $data->nama }}</h1>
<br>
<h1>email : {{ $data->email }}</h1>
<br>
<h1>Telp : {{ $data->telp }}</h1>
<br>
<h1>Alamat : {{ $data->alamat }}</h1>
<br>
<h1>Status : {{ $data->status }}</h1>
<hr>
@endforeach
