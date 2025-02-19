<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;

class PublishedController extends MainController
{
    public function __invoke(Book $book){
        $this->service->updateStatus($book);
        return redirect()->back();
    }
}
