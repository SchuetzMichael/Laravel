<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('books', 'BookController@index');
Route::get('book/{isbn}', 'BookController@findByISBN');
Route::get('book/checkisbn/{isbn}', 'BookController@checkISBN');
Route::get('book/search/{searchTerm}', 'BookController@findBySearchTerm');
Route::get('authors', 'BookController@getAllAuthors');

//diese Routen funktionieren nur im eingeloggten Zustand
Route::group(['middleware' => ['api', 'cors', 'jwt.auth']], function () {
    Route::post('book', 'BookController@save');
    Route::put('book/{isbn}', 'BookController@update');
    Route::delete('book/{isbn}', 'BookController@delete');
    Route::post('auth/logout', 'Auth\ApiAuthController@logout');
    Route::post('order', 'OrderController@saveOrder');
    Route::get('orders/{user_id}', 'OrderController@getAllOrdersByUser');
    Route::get('admin', 'OrderController@index');
    Route::get('admin/{order_id}', 'OrderController@getSingleOrder');
    Route::put('admin', 'OrderController@saveNewStatus');
});

//Route für das Login
Route::group(['middleware' => ['api', 'cors']], function (){
    Route::post('auth/login', 'Auth\ApiAuthController@login');
});