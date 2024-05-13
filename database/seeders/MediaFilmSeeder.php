<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
 /**
  * Run the database seeds.
  */
 public function run(): void
 {
  MediaFilm::insert([
   'film_id'     => 1,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/embed/ZoONcBsQfnI?si=w9dSc84NtRHYWas6',
  ]);
  MediaFilm::insert([
   'film_id'     => 1,
   'media_type'  => 0,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.famousbirthdays.com/faces/frost-diamond-image.jpg',
  ]);
  MediaFilm::insert([
   'film_id'     => 2,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/embed/ZoONcBsQfnI?si=w9dSc84NtRHYWas6',
  ]);
  MediaFilm::insert([
   'film_id'     => 2,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/embed/ZoONcBsQfnI?si=w9dSc84NtRHYWas6',
  ]);
  MediaFilm::insert([
   'film_id'     => 2,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/embed/ZoONcBsQfnI?si=w9dSc84NtRHYWas6',
  ]);
  MediaFilm::insert([
   'film_id'     => 2,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/embed/ZoONcBsQfnI?si=w9dSc84NtRHYWas6',
  ]);
  MediaFilm::insert([
   'film_id'     => 2,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/embed/ZoONcBsQfnI?si=w9dSc84NtRHYWas6',
  ]);
  MediaFilm::insert([
   'film_id'     => 3,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/watch?v=ywl5ZumAWX8',
  ]);
  MediaFilm::insert([
   'film_id'     => 3,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/watch?v=RG4qhWr1tA4',
  ]);
  MediaFilm::insert([
   'film_id'     => 3,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/watch?v=zsJqbT78gUQ',
  ]);
  MediaFilm::insert([
   'film_id'     => 3,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/watch?v=Q_AD11P4-AM',
  ]);
  MediaFilm::insert([
   'film_id'     => 3,
   'media_type'  => 1,
   'media_title' => 'film apa',
   'url_media'   => 'https://www.youtube.com/watch?v=L9DAnakSAM0',
  ]);

 }
}
