<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // Syntaks dibawah adalah tugas pertemuan 1 Laravel.


    //     public function index(){
    //     $data = new Author();
    //     $authors = $data->getAuthors();
    //     return view('authors', ['authors' => $authors]);
    // }

    // Syntaks dibawah adalah tugas pertemuan 2 Laravel.
        public function index(){
        $authors = Author::all();
        // return view('authors', ['authors' => $authors]);

        // Syntaks dibawah adalah tugas pertemuan 3 Laravel.
        return response()->json([
            "success" => true,
            "message" => "Get All Authors",
            "data" => $authors
        ],200);
    }
}
