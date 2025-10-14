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
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.'
        ]);
        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif tentang sekelompok anak di Belitung yang berjuang untuk mendapatkan pendidikan.'
        ]);
        Book::create([
            'title' => '5 cm',
            'description' => 'Cerita tentang persahabatan dan petualangan lima sahabat.'
        ]);
        Book::create([
            'title' => 'Negeri 5 Menara',
            'description' => 'Perjalanan seorang anak desa menuntut ilmu di pesantren.'
        ]);
        Book::create([
            'title' => 'Ayat-Ayat Cinta',
            'description' => 'Kisah cinta dan perjuangan seorang mahasiswa di Mesir.'
        ]);
    }
}
