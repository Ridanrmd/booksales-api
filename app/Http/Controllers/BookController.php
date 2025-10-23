<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


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

        if($books->isEmpty()){
            return response()->json([
                "success" => true,
                "message" => "No Books Found"
            ],200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Books",
            "data" => $books
        ],200);
    }

    // Syntaks dibawah adalah tugas pertemuan 4 Laravel.
    public function store(Request $request){
        // 1. Validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',    
            'description' => 'required|string',
            'price' => 'required|numeric',   
            'stock' => 'required|integer', 
            'cover_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'genre_id' => 'required|exists:genres,id',
            'author_id' => 'required|exists:authors,id'
        ]);

        // 2. Check validator error
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ],422);
        }

        // 3. Upload imaege
        $image = $request->file('cover_photo');
        $image->store('books', 'public');

        // 4. Insert Data
        $book = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover_photo' => $image->hashName(),
            'genre_id' => $request->genre_id,
            'author_id' => $request->author_id
        ]);

        // 5. Response
        return response()->json([
            "success" => true,
            "message" => "Resource is added successfully",
            "data" => $book
        ],201);
    }

    // Syntaks dibawah adalah tugas pertemuan 5 Laravel.
    public function show(string $id){
        $book = Book::find($id);

        if(!$book){
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ],404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get detail resource",
            "data" => $book
        ],200);
    }

    public function destroy(string $id){
        $book = Book::find($id);

        if(!$book){
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ],404);
        }

        if($book->cover_photo){
            Storage::disk('public')->delete('books/'.$book->cover_photo);
        }

        $book->delete();

        return response()->json([
            "success" => true,
            "message" => "Resource deleted successfully"
        ],200);
    }

    public function update(string $id, Request $request){
        // 1. Mencari data
        $book = Book::find($id);

        if (!$book){
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ],404);
        }

        // 2. Validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',    
            'description' => 'required|string',
            'price' => 'required|numeric',   
            'stock' => 'required|integer', 
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'genre_id' => 'required|exists:genres,id',
            'author_id' => 'required|exists:authors,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ],422);
        }

        // 3. Siapkan data yg ingin diupdate
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'genre_id' => $request->genre_id,
            'author_id' => $request->author_id
        ];

        // 4. Hanle upload image 
        if ($request->hasFile('cover_photo')){
            $image = $request->file('cover_photo');
            $image->store('books', 'public');

            if($book->cover_photo){
                Storage::disk('public')->delete('books/'.$book->cover_photo);
            }

            $data['cover_photo'] = $image->hashName();
        } 

        // 5. Update data baru ke database
        $book->update($data);

        return response()->json([
            "success" => true,
            "message" => "Resource updated successfully",
            "data" => $book
        ],200);
    }
}
