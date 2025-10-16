<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 50000,
            'stock' => 10,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);
        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif tentang sekelompok anak di Belitung yang berjuang untuk mendapatkan pendidikan.',
            'price' => 60000,
            'stock' => 5,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);
        Book::create([
            'title' => '5 cm',
            'description' => 'Cerita tentang persahabatan dan petualangan lima sahabat.',
            'price' => 55000,
            'stock' => 7,
            'cover_photo' => '5cm.jpg',
            'genre_id' => 1,
            'author_id' => 3
        ]);
        Book::create([
            'title' => 'Negeri 5 Menara',
            'description' => 'Perjalanan seorang anak desa menuntut ilmu di pesantren.',
            'price' => 65000,
            'stock' => 4,
            'cover_photo' => 'negeri_5_menara.jpg',
            'genre_id' => 2,
            'author_id' => 4
        ]);
        Book::create([
            'title' => 'Ayat-Ayat Cinta',
            'description' => 'Kisah cinta dan perjuangan seorang mahasiswa di Mesir.',
            'price' => 70000,
            'stock' => 6,
            'cover_photo' => 'ayat_ayat_cinta.jpg',
            'genre_id' => 3,
            'author_id' => 5
        ]);
    }
}
