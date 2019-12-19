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
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'MainController@index')->name('home');
Route::get('/series','SerieController@index')->name('serie.index');
Route::get('/episodes','EpisodeController@show')->name('episode.show');
Route::get('/user','UserController@index')->name('user.index');

Route::resource('serie','SerieController');
Route::resource('episode','EpisodeController');

Route::resource('comment', 'CommentController');

Route::get('/', 'MainController@index')->name('home');

Route::get('/series','SerieController@index')->name('serie.index');

Route::get('/comment/create/', 'CommentController@create')->name('comment.create');