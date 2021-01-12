<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'GameController@index');
Route::get('/home', 'GameController@index');

Route::get('/detail/{id}/{title}', 'GameController@detail');

Route::get('/type/{id}', 'GameController@view')->name('view.game');

Route::middleware(['auth'])->group(function () {

        Route::post('add-to-cart/{id}', 'CartController@add');
        Route::get('cart', 'CartController@index');
        Route::post('checkout', 'CartController@checkout');
        Route::get('transaction', 'HistoryController@history');
        Route::get('history/{id}', 'HistoryController@detail');

        Route::get('password', 'ChangePasswordController@edit')->name('user.password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('user.password.update');
});


