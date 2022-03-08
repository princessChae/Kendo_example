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
});

Route::get('main','UserController@main')->name('main');
Route::get('about','UserController@about')->name('about');

Route::resource('views', 'UserController');

// Route::get('index','KendoController@index')->name('kendo');
// Route::get('edit','KendoController@edit')->name('kendo.edit');
Route::resource('kendo', 'KendoController');
Route::post('kendo/destroy_data', 'KendoController@destroy_data')->name('kendo.destroy_data');
Route::post('kendo/update_data', 'KendoController@update_data')->name('kendo.update_data');