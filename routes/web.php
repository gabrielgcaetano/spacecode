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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $param = false;
    return view('home', compact('param'));
})->name('home');

Route::get('principal', 'Admin\HomeController@index')->name('principal');
Route::get('contato', 'Admin\ContatoController@index')->name('contato');

Route::post('envio-emails', 'Admin\ContatoController@enviaAvisoContato')->name('envio-emails');
Route::post('envio-emails2', 'Admin\ContatoController@enviaAvisoContato2')->name('envio-emails2');
