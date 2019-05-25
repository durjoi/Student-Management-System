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

Route::get('/','studentController@index')->name('index')->middleware('auth');
Route::get('/create','studentController@create')->name('create')->middleware('auth');
Route::post('/store','studentController@store')->name('store');
Route::get('/edit/{id}','studentController@edit')->name('edit')->middleware('auth');
Route::post('/update/{id}','studentController@update')->name('update');
Route::post('/delete/{id}','studentController@delete')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
