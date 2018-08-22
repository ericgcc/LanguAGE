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
Route::get('/', 'RatingController@index')
        ->middleware('basicAuth')
        ->name('home');

Route::post('store', 'RatingController@store')
    ->middleware('basicAuth')
    ->prefix('ratings')
    ->name('store');