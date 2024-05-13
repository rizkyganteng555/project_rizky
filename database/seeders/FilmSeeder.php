<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::insert([
            'judul' => 'jumanji',
            'deskripsi' => 'lorem ipmsum.....'
        ]);
        Film::insert([
            'judul'     => 'the cars',
            'deskripsi' => 'lorem ipmsum.....'
        ]);
        Film::insert([
            'judul'     => 'toy story',
            'deskripsi' => 'lorem ipmsum.....'
        ]);


    }
}
