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
    return view('/auth/login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('contas', 'ContasController')->middleware('auth');
Route::resource('bancos', 'BancosController')->middleware('auth');
Route::resource('clientes', 'ClientesController')->middleware('auth');
Route::resource('backup', 'ClientesbkController')->middleware('auth');
Route::resource('contas', 'ContasController')->middleware('auth');
Route::resource('movimentacoes', 'MovimentacoesController')->middleware('auth');
