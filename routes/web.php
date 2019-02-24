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



Auth::routes(['verify' => true]);

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/', 'PagesController@index')->name('start');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/privacy', 'PagesController@privacy')->name('privacy');
Route::get('/terms', 'PagesController@terms')->name('terms');



Route::resource('moods', 'MoodController')->middleware('verified');


Route::get('/you', 'UserController@index')->middleware('verified')->name('you');
Route::get('/you/settings', 'SettingsController@index')->name('you.settings');
Route::get('/you/setup/{step?}', 'SetupController@index')->middleware('verified')->name('you.setup');
Route::post('/you/setup/{step?}', 'SetupController@store')->middleware('verified')->name('you.setup');
