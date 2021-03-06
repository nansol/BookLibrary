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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'BooksController@index'); 
Route::get('/book/add', 'BooksController@create'); 
Route::post('/', 'BooksController@store');
Route::get('/book/{id}', 'BooksController@show');

Route::get('/authors', 'AuthorsController@index'); 
Route::post('/authors', 'AuthorsController@store');
Route::get('/author/add', 'AuthorsController@create'); 
