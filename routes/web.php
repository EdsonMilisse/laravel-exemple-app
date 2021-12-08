<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

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
// Home page

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Route::get('/sobre','SobreController@index')->name('sobre.index');

//client routes

Route::get('/cliente','ClienteController@index')->name('cliente.index');
Route::get('/cliente/cadastro','ClienteController@create')->name('cliente.create');
Route::get('/cliente/{id}/edit','ClienteController@edit')->name('cliente.edit');
Route::put('/cliente/{id}','ClienteController@update')->name('cliente.update');
Route::get('/cliente/{id}','ClienteController@show')->name('cliente.show');
Route::post('/cliente','ClienteController@store')->name('cliente.store');
Route::delete('/cliente/{id}','ClienteController@destroy')->name('cliente.destroy');



