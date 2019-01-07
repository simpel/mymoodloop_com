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

Route::get('/', 'PagesController@index')->name('start');
Route::get('/about', 'PagesController@about')->name('about');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );


Route::get('/you', 'UserController@index')->name('you');
Route::get('/you/profile', 'UserController@edit')->name('you.profile');
Route::get('/admin', 'AdminController@index')->name('home');
