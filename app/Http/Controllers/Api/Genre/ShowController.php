<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Controller;
use App\Http\Resources\Book\BookResource;
use Illuminate\Http\Request;

class ShowController extends MainController
{
    public function __invoke($id, Request $request){
        $books = $this->service->getGenreBooks($id, $request);
        return BookResource::collection($books);
    }
}
