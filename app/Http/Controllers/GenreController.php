<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Validator;


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

    // Syntaks dibawah adalah tugas pertemuan 4 Laravel.
    public function store(Request $request){
        // 1. Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',    
            'description' => 'required|string',
            'genre_id' => 'required|integer'
        ]);     
        // 2. Check validator error
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ],422); 

        }
        // 3. Insert Data
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
            'genre_id' => $request->genre_id
        ]);

        // 4. Response
        return response()->json([
            "success" => true,
            "message" => "Create Genre Success",
            "data" => $genre
        ],200);
    }

    // Syntaks dibawah adalah tugas pertemuan 5 Laravel.
    
    public function show (string $id){
        $genre = Genre::find($id);

        if(!$genre){
            return response()->json([
                "success" => false,
                "message" => "Genre Not Found",
            ],404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Genre Detail",
            "data" => $genre
        ],200);
    }

    public function destroy(string $id){
        $genre = Genre::find($id);

        if(!$genre){
            return response()->json([
                "success" => false,
                "message" => "Genre Not Found"
            ],404);
        }

        $genre->delete();

        return response()->json([
            "success" => true,
            "message" => "Genre Deleted Successfully"
        ],200);
    }

    public function update(string $id, Request $request){
        // 1. Mencari data
        $genre = Genre::find($id);

        if (!$genre){
            return response()->json([
                "success" => false,
                "message" => "Genre Not Found"
            ],404);
        }

        // 2. Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',    
            'description' => 'required|string',
            'genre_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ],422);
        }

        // 3. Siapkan data yg ingin diupdate
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'genre_id' => $request->genre_id
        ];

        // 4. Update data
        $genre->update($data);

        return response()->json([
            "success" => true,
            "message" => "Update Genre Success",
            "data" => $genre
        ],200);
    }
}