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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogposts', 'BlogpostsController@index');
Route::post('/blogposts/newblog', 'BlogpostsController@postCreate');
Route::get('/blogposts/newblog', 'BlogpostsController@create');
Route::get('/blogposts/general', 'BlogpostsController@blogGeneral');
Route::get('/blogposts/gunpla', 'BlogpostsController@blogGunpla');
Route::get('/blogposts/games', 'BlogpostsController@blogGames');
Route::get('/blogposts/{blogpost}', 'BlogpostsController@blogpost')->name('blogposts.blogpost');
Route::get('/blogposts/{blogpost}/edit', 'BlogpostsController@edit');
