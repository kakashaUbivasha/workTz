<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Controller;
use App\Services\Api\Genre\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $service;
    public function __construct(Service $service){
        $this->service = $service;
    }
}
