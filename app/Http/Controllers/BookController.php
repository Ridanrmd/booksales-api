<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Syntaks dibawah adalah tugas pertemuan 1 Laravel.

    // public function index(){
    //     $data = new Book();
    //     $books = $data->getBooks();
    //     return view('books', ['books' => $books]);
    // }

    // Syntaks dibawah adalah tugas pertemuan 2 Laravel.
        public function index(){
        $books = Book::all();
        // return view('books', ['books' => $books]);

        return response()->json([
            "success" => true,
            "message" => "Get All Books",
            "data" => $books
        ],200);
    }
}
