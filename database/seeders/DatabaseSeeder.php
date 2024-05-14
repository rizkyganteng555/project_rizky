<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            SiswaSeeder::class
        ]);
        $this->call([
            SekolahSeeder::class,
        ]);
        $this->call([
        AlbumSeeder::class,
        ]);
        $this->call([
        FilmSeeder::class,
        ]);
        $this->call([
        DetailFilmSeeder::class,
        ]);
        $this->call([
        MediaFilmSeeder::class,
        ]);

        $this->call([
            ArtikelSeeder::class,
        ]);

    }
}
