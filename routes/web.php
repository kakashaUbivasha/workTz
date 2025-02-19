<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', \App\Http\Controllers\Web\Book\IndexController::class)->name('books.index');
Route::get('/books/create', \App\Http\Controllers\Web\Book\CreateController::class)->name('books.create');
Route::post('/books', \App\Http\Controllers\Web\Book\StoreController::class)->name('books.store');
Route::get('/books/{book}', \App\Http\Controllers\Web\Book\ShowController::class)->name('books.show');
Route::get('/books/{book}/edit', \App\Http\Controllers\Web\Book\EditController::class)->name('books.edit');
Route::patch('/books/{book}', \App\Http\Controllers\Web\Book\UpdateController::class)->name('books.update');
Route::delete('/books/{book}', \App\Http\Controllers\Web\Book\DestroyController::class)->name('books.destroy');


Route::get('/genres', \App\Http\Controllers\Web\Genre\IndexController::class)->name('genres.index');
Route::get('/genres/create', \App\Http\Controllers\Web\Genre\CreateController::class)->name('genres.create');
Route::post('/genres', \App\Http\Controllers\Web\Genre\StoreController::class)->name('genres.store');
Route::delete('/genres/{genre}', \App\Http\Controllers\Web\Genre\DestroyController::class)->name('genres.destroy');
Route::get('/genres/{genre}/edit', \App\Http\Controllers\Web\Genre\EditController::class)->name('genres.edit');
Route::patch('/genres/{genre}', \App\Http\Controllers\Web\Genre\UpdateController::class)->name('genres.update');
