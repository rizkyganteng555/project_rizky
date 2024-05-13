<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
 /**
  * Run the database seeds.
  */
 public function run(): void
 {
  DetailFilm::insert([
   'film_id'   => 1,
   'code_film' => 'tt1684562',
   'url_imdb'  => 'https://www.imdb.com/title/tt1684562/?ref_=tt_sims_tt_i_8',
  ]);
  DetailFilm::insert([
   'film_id'   => 2,
   'code_film' => 'tt14539740',
   'url_imdb'  => 'https://www.imdb.com/title/tt14539740/?ref_=tt_sims_tt_i_12',
  ]);
  DetailFilm::insert([
   'film_id'   => 3,
   'code_film' => 'tt21235248',
   'url_imdb'  => 'https://www.imdb.com/title/tt21235248/?ref_=tt_sims_tt_i_5',
  ]);

 }
}
