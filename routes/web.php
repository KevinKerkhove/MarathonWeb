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

use App\Genre;
use App\Http\Resources\GenreResource;
use App\Http\Resources\SerieResource;
use App\Serie;

Auth::routes();

<<<<<<< HEAD
Route::get('/comment/create/{id}', 'CommentController@create')->name('comment.create');

Route::post('/comment', 'CommentController@store')->name('comment.store');

Route::get('/comment/edit/{id}', 'CommentController@edit')->name('comment.edit');

Route::get('/comment/update/{id}', 'CommentController@update')->name('comment.update');
=======
Route::get('/', 'MainController@index')->name('home');
Route::get('/series','SerieController@index')->name('serie.index');
Route::get('/episodes','EpisodeController@show')->name('episode.show');
>>>>>>> 9832bf9a82d6e886e5ee7251af7b915ab56442d9

Route::resource('serie','SerieController');
Route::resource('episode','EpisodeController');

//Route::resource('comment', 'CommentController');

Route::get('/', 'MainController@index')->name('home');

Route::get('/series','SerieController@index')->name('serie.index');