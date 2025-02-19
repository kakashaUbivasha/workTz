<?php

namespace App\Http\Controllers\Web\Genre;

use App\Http\Controllers\Controller;
use App\Services\Web\Genre\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $service;
    public function __construct(Service $service){
        $this->service = $service;
    }
}
