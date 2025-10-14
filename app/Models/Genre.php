<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Syntaks dibawah adalah tugas pertemuan 1 Laravel.

    // private $genres = [
    //     [
    //         'genre_id' => 1,
    //         'name' => 'Fiksi',
    //         'description' => 'Genre yang berisi cerita imajinatif dan tidak berdasarkan fakta.',
    //     ],
    //     [
    //         'genre_id' => 2,
    //         'name' => 'Non-Fiksi',
    //         'description' => 'Genre yang berisi cerita berdasarkan fakta dan kenyataan.',    
    //     ],
    //     [
    //         'genre_id' => 3,
    //         'name' => 'Fantasi',
    //         'description' => 'Genre yang berisi cerita dengan elemen magis atau supernatural.',        
    //     ],
    //     [
    //         'genre_id' => 4,
    //         'name' => 'Misteri',
    //         'description' => 'Genre yang berisi cerita tentang pemecahan teka-teki atau kejahatan.',        
    //     ],
    //     [
    //         'genre_id' => 5,
    //         'name' => 'Romantis',
    //         'description' => 'Genre yang berisi cerita tentang hubungan cinta antara karakter utama.',        
    //     ],
        
    // ];

    // public function getGenres(){
    //     return $this->genres;
    // }

    // Syntaks dibawah adalah tugas pertemuan 2 Laravel.
    protected $table = 'genres';
}
