<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Syntaks dibawah adalah tugas pertemuan 1 Laravel.

    // private $books = [
    //     [
    //         'title' => 'Pulang',
    //         'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
    //         'price' => 40000,
    //         'stock' => 15,
    //         'cover_photo' => 'pulang.jpg',
    //         'genre_id' => 1,
    //         'author_id' => 1
    //     ],
    //     [
    //         'title' => 'Laskar Pelangi',
    //         'description' => 'Kisah inspiratif tentang anak-anak di Belitung yang berjuang untuk pendidikan.',
    //         'price' => 50000,
    //         'stock' => 10,
    //         'cover_photo' => 'laskar_pelangi.jpg',
    //         'genre_id' => 2,
    //         'author_id' => 2
    //     ],
    //     [
    //         'title' => '5 cm',
    //         'description' => 'Cerita tentang persahabatan dan petualangan lima sahabat.',
    //         'price' => 45000,
    //         'stock' => 20,
    //         'cover_photo' => '5cm.jpg',
    //         'genre_id' => 1,
    //         'author_id' => 3
    //     ],
    //     [
    //         'title' => 'Negeri 5 Menara',
    //         'description' => 'Perjalanan seorang anak desa menuntut ilmu di pesantren.',
    //         'price' => 55000,
    //         'stock' => 8,
    //         'cover_photo' => 'negeri_5_menara.jpg',
    //         'genre_id' => 2,
    //         'author_id' => 4
    //     ],
    //     [
    //         'title' => 'Ayat-Ayat Cinta',
    //         'description' => 'Kisah cinta dan perjuangan seorang mahasiswa di Mesir.',
    //         'price' => 60000,
    //         'stock' => 12,
    //         'cover_photo' => 'ayat_ayat_cinta.jpg',
    //         'genre_id' => 3,
    //         'author_id' => 5
    //     ]
    // ];

    // public function getBooks()
    // {
    //     return $this->books;
    // }

    // Syntaks dibawah adalah tugas pertemuan 2 Laravel.
    protected $table = 'books';

    protected $fillable = ['title', 'description', 'price', 'stock', 'cover_photo', 'genre_id', 'author_id'];
}
