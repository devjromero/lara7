<?php

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', 'LoginController@login')
    ->middleware('guest')
    ->name('login');

Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout');
Route::get('/profile', 'ProfileController@index');
