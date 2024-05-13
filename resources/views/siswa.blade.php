@php
//tanpa foreeach
    $siswa = \App\Models\Siswa::find(3);
    //dengan foreeach
    $siswa2 = \App\Models\Siswa::where('id', '!=',1);
    //->orderBy('id','desc')
    //->take(3)
    //->groupBy('nama')
    //->get();
    $siswa3 = \App\Models\Siswa::where('kelas', 'xi rpl 2')->orderBy('id','desc')->first();
    $siswa4 = \App\Models\Siswa::where('kelas', 'xi rpl 2')->orderBy('id','desc')->firstOrFail();

@endphp
<h1>Daftar Siswa Smk Yang mantap</h1>

($siswa as $data)

    <h1>Nama : {{ $siswa3->nama ?? 'kosong' }}</h1>
    <br>
    <h1>Kelas : {{ $siswa3->kelas ?? 'kosong' }}</h1>
    <br>
    <h1>Jenis kelamin  : {{ $siswa3->jenis_kelamin  ?? 'kosong'}}</h1>
    <hr>


