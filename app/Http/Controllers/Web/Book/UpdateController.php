<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends MainController
{
    public function __invoke(UpdateBookRequest $request, Book $book){
        $data = $request->validated();
        $this->service->update($data, $book, $request);
        return redirect(route('books.show', $book->id));
    }
}
