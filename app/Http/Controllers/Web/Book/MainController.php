<?php

namespace App\Http\Controllers\Web\Book;

use App\Http\Controllers\Controller;
use App\Services\Web\Book\Service;

class MainController extends Controller
{
    public $service;
    public function __construct(Service $service){
        $this->service = $service;
    }
}
