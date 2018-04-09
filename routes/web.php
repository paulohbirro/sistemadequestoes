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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/question/{id}', 'QuestionController@destroy')->name('question.destroy');
Route::get('/edit/{id}', 'QuestionController@edit')->name('question.edit');
Route::get('/list', 'QuestionController@index')->name('question.index');
Route::get('/question', 'QuestionController@create')->name('question.create');
Route::post('/question', 'QuestionController@store')->name('question.store');
Route::put('/question/{id}', 'QuestionController@update')->name('question.update');



