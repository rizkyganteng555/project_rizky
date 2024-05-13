<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Sekolah::insert(
      [
        'nama'   => 'SMK ASSALAAM BANDUNG',
        'email'  => 'assalaambandung@gmail.com',
        'telp'   => 123456781,
        'alamat' => 'jl.situtarate',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'SMA ASSALAAM BANDUNG',
        'email'  => 'assalaambandung@gmail.com',
        'telp'   => 987654322,
        'alamat' => 'jl.situtarate',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'SMP ASSALAAM BANDUNG',
        'email'  => 'assalaambandung@gmail.com',
        'telp'   => 9192837463,
        'alamat' => 'jl.situtarate',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'SD ASSALAAM BANDUNG',
        'email'  => 'assalaambandung@gmail.com',
        'telp'   => 564738294,
        'alamat' => 'jl.situtarate',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'TK ASSALAAM BANDUNG',
        'email'  => 'assalaambandung@gmail.com',
        'telp'   => 231495865,
        'alamat' => 'jl.situtarate',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'PAUD ASSALAAM BANDUNG',
        'email'  => 'assalaambandung@gmail.com',
        'telp'   => 997565636,
        'alamat' => 'jl.situtarate',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'SMK TIGA TIGA BANDUNG',
        'email'  => 'pasundantiga@gmail.com',
        'telp'   => 123456787,
        'alamat' => 'jl.bunga melati',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'SMA SATU BANDUNG',
        'email'  => 'smansa@gmail.com',
        'telp'   => 123456788,
        'alamat' => 'jl.pro player',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'PASUNDAN DUA BANDUNG',
        'email'  => 'pasundan@gmail.com',
        'telp'   => 992264579,
        'alamat' => 'jl.alun alun kedua',
        'status' => 'aktif',
      ]
    );
    Sekolah::insert(
      [
        'nama'   => 'PASUNDAN SATU',
        'email'  => 'pasundan@gmail.com',
        'telp'   => 221133452,
        'alamat' => 'jl.alun alun',
        'status' => 'aktif',
      ]
    );

  }
}
