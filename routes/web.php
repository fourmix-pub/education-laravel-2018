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
// ブログ
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/articles', 'ArticleController@index')->name('articles.index');
// Route::post('/articles', 'ArticleController@store')->name('articles.store');
// Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
// Route::get('/articles/show/{article}', 'ArticleController@show')->name('articles.show');
// Route::get('/articles/edit/{article}', 'ArticleController@edit')->name('articles.edit');
// Route::put('/articles/{article}', 'ArticleController@update')->name('articles.update');
// Route::delete('/articles/{article}', 'ArticleController@destroy')->name('articles.delete');

Route::get('/', 'AllHomeController@index')->name('all_home');
Route::get('/show/recipes/{recipe}', 'AllHomeController@show')->name('all.recipes.show');
Route::get('/home', 'UserHomeController@index')->name('u_home');
Route::get('/recipes/show/{recipe}', 'RecipeController@show')->name('recipes.show');
Route::get('/recipes', 'RecipeController@index')->name('recipes.index');
Route::get('/recipes/create', 'RecipeController@create')->name('recipes.create');
Route::put('/recipes/{recipe}', 'RecipeController@update')->name('recipes.update');
Route::post('/recipes', 'RecipeController@store')->name('recipes.store');
Route::delete('/recipes/{recipe}', 'RecipeController@destroy')->name('recipes.delete');
Route::get('/recipes/edit/{recipe}', 'RecipeController@edit')->name('recipes.edit');

//コメント
Route::get('/recipes/{recipe}/comment', 'CommentController@create')->name('comments.create');
Route::post('/recipes/{recipe}/comment', 'CommentController@store')->name('comments.store');
