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
    return view('index');
})->name('home');

Route::get('/home','PageController@home')->name('home');
Route::get('/visimisi','PageController@visimisi')->name('visimisi');
Route::get('/structure','PageController@structure')->name('structure');
Route::get('/machines','PageController@machines')->name('machines');
Route::get('/laboratory','PageController@laboratory')->name('laboratory');
Route::get('/conference','PageController@conference')->name('conference');