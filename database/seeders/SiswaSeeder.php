<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Siswa::insert(
            [
                'nama' => 'rizkymrnumberone',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'jl.pro player'
            ]
            );
            Siswa::insert(
            [
                'nama'          => 'zapnuloser',
                'kelas'         => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat'        => 'jl.pro player',
            ]
            );
            Siswa::insert(
            [
                'nama'          => 'tyarbeban',
                'kelas'         => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat'        => 'jl.pro player',
            ]
            );


    }
}
