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
Route::get('/blogposts/blogpost/{id}', 'BlogpostsController@blogpost')->name('blogposts.blogpost');
