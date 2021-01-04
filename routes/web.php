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
// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/', function () {
    return view('/main/top');
});
Route::get('/option', function(){
    return view('/layouts/option');
});
Route::get('/profile', 'ProfileController@show')->name('profileShow');
Route::get('/favorite', 'FavoriteController@show');

Route::get('/labo', 'RoomController@show')->name('RoomShow');
Route::post('/place', 'RoomController@posts');
Route::get('show/{id}', 'RoomController@create')->name('RoomCreate');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
