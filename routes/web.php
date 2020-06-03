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
Route::get('/','MainController@index')->name('house');

Route::get('heroe/{heroe}','MainController@show')->name('heroe');

Route::get('heroes','heroeController@index')->name('heroes.index');
Route::post('heroes','heroeController@store')->name('heroes.store');
Route::get('heroes/create','heroeController@create')->name('heroes.create');	
Route::get('heroes/{heroe}','heroeController@show')->name('heroes.show');
Route::put('heroes/{heroe}','heroeController@update')->name('heroes.update');
Route::delete('heroes/{heroe}','heroeController@destroy')->name('heroes.destroy');
Route::get('heroes/{heroe}/edit','heroeController@edit')->name('heroes.edit');

