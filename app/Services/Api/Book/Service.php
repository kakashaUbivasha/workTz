<?php

namespace App\Services\Api\Book;

use App\Models\Book;

class Service
{
    public function getBooks($request){
        $perPage = $request->query('per_page', 10);
        $books = Book::paginate($perPage);
        return $books;
    }
    public function getBook($id){
        $book = Book::find($id);
        return $book;
    }
}
