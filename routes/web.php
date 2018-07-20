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
/**
 *route
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::post('/articles', 'ArticleController@store')->name('articles.store');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::get('/articles/show/{article}', 'ArticleController@show')->name('articles.show');
Route::get('/articles/edit/{article}', 'ArticleController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticleController@update')->name('articles.update');
Route::delete('/articles/{article}', 'ArticleController@destroy')->name('articles.delete');
