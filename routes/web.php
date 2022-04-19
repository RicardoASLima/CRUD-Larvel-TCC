<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\TccController@index');
Route::get('/books', 'App\Http\Controllers\TccController@index');
Route::get('/books/create', 'App\Http\Controllers\TccController@create');
Route::post('/books/create', 'App\Http\Controllers\TccController@store');
Route::get('/books/{id}', 'App\Http\Controllers\TccController@show');
Route::get('/books/{id}/edit', 'App\Http\Controllers\TccController@edit');
Route::put('/books/{id}/edit', 'App\Http\Controllers\TccController@update');
Route::delete('/books/{id}/delete', 'App\Http\Controllers\TccController@destroy');
