<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Syntaks dibawah adalah tugas pertemuan 1 Laravel.
    // public function index(){
    //     $data = new Genre();
    //     $genres = $data->getGenres();
    //     return view('genres', ['genres' => $genres]);
    // }

    // Syntaks dibawah adalah tugas pertemuan 2 Laravel.
    public function index(){
        $genres = Genre::all();
        // return view('genres', ['genres' => $genres]);

        // Syntaks dibawah adalah tugas pertemuan 3 Laravel.
        return response()->json([
            "success" => true,
            "message" => "Get All Genres",
            "data" => $genres
        ],200);
    }
}