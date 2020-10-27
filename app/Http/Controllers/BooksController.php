<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
    public function index(){
        return Book::all();
    }

    public function show($id){
        $buku = Book::find($id);
        if($buku){
            return response()->json([
                'message' => 'Menampilkan buku sesuai id',
                'data' => $buku
            ], 200);
        }
        else{
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }
    }
}
