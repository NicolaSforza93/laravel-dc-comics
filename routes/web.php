<?php

use App\Http\Controllers\ComicBookController;
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
    return view('home');
})->name('home');

// CRUD

Route::get('/comic_books', [ComicBookController::class, 'index'])
    ->name('comic_books.index');

Route::get('/comic_books/{comic_book}', [ComicBookController::class, 'show'])
    ->name('comic_books.show');
