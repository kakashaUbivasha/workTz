<?php

namespace App\Services\Api\Book;

use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Service
{
    public function getBooks($request){
        $perPage = $request->query('per_page', 10);
        $books = Book::paginate($perPage);
        return $books;
    }
    public function getBook($id){
        $book = Book::find($id);
        if (!$book) {
            abort(response()->json(['error' => 'Книга не найдена'], 404));
        }
        return $book;
    }
}
