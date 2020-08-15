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

Route::get('/', function () {
    return view('master');
});
Route::resource('tag', 'TagController');

//Bagian Pertanyaan
Route::get('/pertanyaan', 'questionController@index');
Route::get('/pertanyaan/create', 'questionController@create');  
Route::post('/question/create', 'questionController@store');
Route::get('/pertanyaan/show/{id}', 'questionController@show');
Route::get('/pertanyaan/edit/{id}', 'questionController@edit');
Route::post('/edit/pertanyaan/{id}', 'questionController@editpost');
Route::delete('/pertanyaan/delete/{id}', 'questionController@destroy'); 
