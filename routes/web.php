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

Route::get('/','HomeController@index');

Route::middleware(['auth'])->prefix('player')->group(function() {

    Route::prefix('information')->group(function() {
        Route::get('profile', 'PlayerController@profile');
        Route::get('profile/edit', 'PlayerController@profileForm');
    });
});

