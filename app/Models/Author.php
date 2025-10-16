<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Syntaks dibawah adalah tugas pertemuan 1 Laravel.

    // private $authors = [
    //     [
    //         'author_id' => 1,
    //         'name' => 'J.K. Rowling',
    //         'bio' => 'Penulis terkenal dari seri Harry Potter.',
    //     ],
    //     [
    //         'author_id' => 2,
    //         'name' => 'George R.R. Martin',
    //         'bio' => 'Penulis dari seri A Song of Ice and Fire, yang diadaptasi menjadi serial TV Game of Thrones.',    
    //     ],
    //     [
    //         'author_id' => 3,
    //         'name' => 'Agatha Christie',
    //         'bio' => 'Penulis novel misteri terkenal dengan karakter Hercule Poirot dan Miss Marple.',        
    //     ],
    //     [
    //         'author_id' => 4,
    //         'name' => 'Stephen King',
    //         'bio' => 'Penulis horor dan fiksi ilmiah yang sangat produktif.',        
    //     ],
    //     [
    //         'author_id' => 5,
    //         'name' => 'Jane Austen',
    //         'bio' => 'Penulis klasik Inggris yang terkenal dengan novel-novelnya tentang kehidupan sosial dan percintaan.',        
    //     ],
        
    // ];

    // public function getAuthors(){
    //     return $this->authors;
    // }

    // Syntaks dibawah adalah tugas pertemuan 2 Laravel.
    protected $table = 'authors';

    protected $fillable = ['name', 'author_id', 'bio'];
}
