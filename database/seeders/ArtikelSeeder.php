<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artikel;
class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::insert([
            'judul' => 'PT LG Elektronik',
            'foto' => 'https://tinkrlearnr.com/wp/wp-content/uploads/2015/07/Fundamentals-v1.6-01.png',
            'kategori' => 'teknologi',
            'konten' => 'Pengguna mungkin tertarik untuk mengetahui perbandingan iPhone 15 Plus vs iPhone 15 Pro, terutama yang tengah berencana membeli salah satu dari kedua model ponsel terbaru buatan Apple tersebut.',
            'penulis' => 'Zulfikar Hardiansyah'
        ]);
        Artikel::insert([
            'judul'    => 'koruptor',
            'foto'     => 'https://th.bing.com/th/id/OIP.lWIyP3GNGozIeeMWc_i7JwHaJ5?w=201&h=268&c=7&r=0&o=5&pid=1.7.jpg',
            'kategori' => 'politik',
            'konten'   => 'Kasus PT TPPI Kasus korupsi yang menyeret PT Trans-Pacific Petrochemical Indotama (TPP) menempati peringkat kedua dengan kerugian negara mencapai Rp 2,7 miliar dollar Amerika Serikat atau sekitar Rp 37,8 triliun. Dalam kasus ini, mantan Kepala BP Migas, Raden Priyono dan mantan Deputi Finansial Ekonomi dan Pemasaran BP Migas, Djoko Harsono telah divonis 12 tahun penjara. Sayangnya, mantan Presiden Direktur PT TPPI, Honggo Wendratno yang divonis 16 tahun penjara kini masih berstatus buron.',
            'penulis'  => 'Ahmad Naufal Zhulfaroh',
        ]);
        Artikel::insert([
            'judul'    => 'mobil bagus',
            'foto'     => 'https://asset.kompas.com/crops/7pdFXZO8_cYdawYcvUW2PEx3DLU=/0x170:4032x2858/1200x800/data/photo/2023/08/13/64d85a96096a4.jpeg',
            'kategori' => 'kendaraan',
            'konten'   => 'JAKARTA, KOMPAS.com - Pilihan mobil listrik di Indonesia semakin beragam. Belum lama ini, 11 model baru resmi meluncur, mulai sedan, sport utility vehicle (SUV), hingga multi purpose vehicle (MPV).',
            'penulis'  => 'Doni Dwisatryo Priantoro',
        ]);

    }
}

