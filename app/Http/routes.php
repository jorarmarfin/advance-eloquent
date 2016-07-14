<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return App\Book::all();
});
/*



Book::all();
>>> $book = Book::find(18);
>>> $book->delete();
>>> book::withTrashed()->get();
>>> $book->restore();
>>> $book = Book::withTrashed()->find(20);
>>> $book->forceDelete();
 */