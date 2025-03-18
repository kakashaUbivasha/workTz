<?php


use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware'=>'auth:sanctum'], function (){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');;

Route::get('/books', \App\Http\Controllers\Api\Book\IndexController::class);
Route::get('/books/{book}', App\Http\Controllers\Api\Book\ShowController::class);
Route::get('/genres', \App\Http\Controllers\Api\Genre\IndexController::class);
Route::get('/genres/{genre}',\App\Http\Controllers\Api\Genre\ShowController::class);
