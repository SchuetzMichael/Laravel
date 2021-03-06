<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \Illuminate\Support\Facades;
use App\Book;
//auf die Methoden vom Controller verweisen:
Route::get('/', 'BookController@index');
Route::get('/books','BookController@index');
Route::get('books/{id}','BookController@show');