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

Route::get('/index', 'HomeController@index')->name('index');
Route::get('/movies/view', 'MovieController@view')->name('movies.view');
Route::get('/movies/show/{movie}', 'MovieController@show')->name('movies.show');
Route::post('/movies/select', 'MovieController@select')->name('movies.select');
Route::get('/admin/index', 'Admin\MovieController@index')->name('admin.index');
Route::get('/admin/draft', 'Admin\MovieController@draft')->name('admin.draft');
Route::get('/admin/create', 'Admin\MovieController@create')->name('admin.create');
Route::post('/movies/store', 'Admin\MovieController@store')->name('admin.store');
