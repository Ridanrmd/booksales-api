<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'genre_id' => 1,
            'description' => 'Genre yang menekankan pada adegan aksi, pertempuran, dan kecepatan.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'genre_id' => 2,
            'description' => 'Genre yang menekankan pada hubunga romantis dan cinta.'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'genre_id' => 3,
            'description' => 'Genre yang mengeksplorasi imajinasi dan dunia yang tidak nyata.'
        ]);
        Genre::create([
            'name' => 'Science Fiction',
            'genre_id' => 4,
            'description' => 'Genre yang berfokus pada teknologi, ilmu pengetahuan, dan masa depan.'
        ]);
        Genre::create([
            'name' => 'Horror',
            'genre_id' => 5,
            'description' => 'Genre yang dirancang untuk menimbulkan rasa takut dan ketegangan.'
        ]);
    }
}
