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

Route::get('/', 'Home0Controller@index')->name('home');
Route::get('/list', 'NoteController@index')->name('notes.list');
Route::post('/notes', 'NoteController@store')->name('notes.store');
Route::get('/notes/create', 'NoteController@create')->name('notes.create');
Route::get('/notes/all', 'NoteController@all')->name('notes.all');
Route::get('/notes/show/{note}', 'NoteController@show')->name('notes.show');
Route::get('/notes/adminShow/{note}/', 'NoteController@adminShow')->name('notes.adminShow');
Route::post('/notes/Show/{note}/comment', 'CommentController@store')->name('comment');
Route::get('/notes/edit/{note}', 'NoteController@edit')->name('notes.edit');
Route::put('/notes/{note}', 'NoteController@update')->name('notes.update');
Route::delete('/notes/{note}', 'NoteController@destroy')->name('notes.delete');
