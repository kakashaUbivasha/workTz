<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Http\Resources\Book\BookResource;
use Illuminate\Http\Request;

class IndexController extends MainController
{
    public function __invoke(Request $request){
        $books = $this->service->getBooks($request);
        return BookResource::collection($books);
    }
}
