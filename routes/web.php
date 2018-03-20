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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register2','UserController@index');
Route::POST('/kayit','UserController@kayit');

Route::get('giris','UserController@giris');
Route::post('giris','UserController@signin');

<<<<<<< HEAD
// Route::get('get','UserController@test');
=======
>>>>>>> master
//
// Route::get('/userLogin','UserController@userLogin');
// Route::post('/userRegister','UserController@userRegister');
