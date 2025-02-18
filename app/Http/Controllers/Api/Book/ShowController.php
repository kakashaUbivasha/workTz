<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Http\Resources\Book\BookResource;
use Illuminate\Http\Request;

class ShowController extends MainController
{
    public function __invoke($id){
        $book = $this->service->getBook($id);
        return new BookResource($book);
    }
}
