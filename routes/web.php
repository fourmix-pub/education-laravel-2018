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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/movies/view', 'MovieController@view')->name('movies.view');
Route::get('/movies/show/{movie}', 'MovieController@show')->name('movies.show');
Route::post('/movies/select', 'MovieController@select')->name('movies.select');
Route::get('/admin/index', 'Admin\MovieController@index')->name('admin.index');
Route::get('/admin/draft', 'Admin\MovieController@draft')->name('admin.draft');
Route::get('/admin/create', 'Admin\MovieController@create')->name('admin.create');
Route::post('/movies/store', 'Admin\MovieController@store')->name('admin.store');
Route::get('/admin/show/{movie}', 'Admin\MovieController@show')->name('admin.show');
Route::delete('/admin/delete/{movie}', 'Admin\MovieController@destroy')->name('admin.delete');
Route::get('/admin/draft_show/{movie}', 'Admin\MovieController@draft_show')->name('admin.draft_show');
Route::get('/admin/edit/{movie}', 'Admin\MovieController@edit')->name('admin.edit');
Route::put('/admin/update/{movie}', 'Admin\MovieController@update')->name('admin.update');
Route::post('/comment/store{movie}', 'CommentController@store')->name('comment.store');
