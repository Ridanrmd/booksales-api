<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Validator;

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

    // Syntaks dibawah adalah tugas pertemuan 4 Laravel.
    public function store(Request $request){
        // 1. Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'author_id' => 'required|integer',   
            'bio' => 'required|string'
        ]); 

        // 2. Check validator error
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ],422);
        }    

        // 3. Insert Data
        $author = Author::create([
            'name' => $request->name,
            'author_id' => $request->author_id,
            'bio' => $request->bio
        ]);

        // 4. Response
        return response()->json([
            "success" => true,
            "message" => "Create Author",
            "data" => $author
        ],200);
    }

    // Syntaks dibawah adalah tugas pertemuan 5 Laravel.
    public function show(string $id){
        $author = Author::find($id);

        if(!$author){
            return response()->json([
                "success" => false,
                "message" => "Author Not Found"
            ],404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Author Detail",
            "data" => $author
        ],200);
    }

    public function destroy(string $id){
        $author = Author::find($id);

        if(!$author){
            return response()->json([
                "success" => false,
                "message" => "Author Not Found"
            ],404);
        }

        $author->delete();

        return response()->json([
            "success" => true,
            "message" => "Author Deleted Successfully"
        ],200);
    }

    public function update(string $id, Request $request){
        // 1. Mencari data
        $author = Author::find($id);

        if (!$author){
            return response()->json([
                "success" => false,
                "message" => "Author Not Found"
            ],404);
        }

        // 2. Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'author_id' => 'required|integer',   
            'bio' => 'required|string'
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
            'author_id' => $request->author_id,
            'bio' => $request->bio
        ];

        // 4. Update data
        $author->update($data);

        return response()->json([
            "success" => true,
            "message" => "Author Updated Successfully",
            "data" => $author
        ],200);
    }
}
