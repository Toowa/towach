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
   
// Route::get('/', 'MessagesController@index');

// Route::resource('messages', 'MessagesController');

Auth::routes();

Route::get('messages.create', 'MessagesController@create')->name('messages.create');
Route::post('/home', 'HomeController@index')->name('home');

Route::post('messages.create', 'MessagesController@store')->name('messages.store');
Route::get('messages.show', 'MessagesController@show')->name('messages.show');
