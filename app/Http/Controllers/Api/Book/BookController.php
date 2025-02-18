<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request){
        getBooks($request);
    }
    public function show($id){
        $book = Book::find($id);
        return response()->json($book);
    }
}
