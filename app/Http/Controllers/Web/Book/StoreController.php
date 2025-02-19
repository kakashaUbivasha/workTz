<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class StoreController extends MainController
{
    public function __invoke(StoreBookRequest $request){
        $data = $request->validated();
        $this->service->store($request,$data);
        return redirect()->route('books.index');
    }
}
