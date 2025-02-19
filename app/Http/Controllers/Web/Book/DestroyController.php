<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestroyController extends MainController
{
    public function __invoke(Book $book){
        if ($book->cover) {
            Storage::delete('public/' . $book->cover);
        }
        $book->delete();
        return redirect()->route('books.index');
    }
}
