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

Route::get('/', 'InstitucionalController@homeView');

Route::get('/favoritos', 'InstitucionalController@favoritoView')->name('favoritos')->middleware('auth');

Route::get('/login', 'InstitucionalController@loginView')->name('login');

Route::get('/cadastro', 'InstitucionalController@cadastroView')->name('cadastro');

Route::get('/produto', 'InstitucionalController@produtoView');

Route::post('/usuarios', 'UsuariosController@store');

Route::post('/login', 'UsuariosController@login');

