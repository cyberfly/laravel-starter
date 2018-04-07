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

Route::get('/admin', function () {
    return view('stellar.dashboard');
});

Route::get('/admin/basic-table', function () {
    return view('stellar.basic-table');
});

Route::get('/admin/basic-form', function () {
    return view('stellar.basic-form');
});
