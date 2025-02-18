<?php

namespace App\Http\Controllers\Api\book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends MainController
{
    public function __invoke(Request $request){
        $books = $this->service->getBooks($request);
        return response()->json($books);
    }
}
