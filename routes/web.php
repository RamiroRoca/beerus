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

Route::get('/', 'HomeController@index');

//Route::get('/admin', function () {return view('admin');});

Route::get('/admin', 'adminController@admin');

// Route::get('/laravel', 'HomeController@welcome');
//
Route::get('/login', 'HomeController@login');
//
Route::get('/register', 'HomeController@register');
