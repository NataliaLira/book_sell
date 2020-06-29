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

Route::get('/favorito', 'InstitucionalController@favoritoView');

Route::get('/login', 'InstitucionalController@loginView');

Route::get('/cadastro', 'InstitucionalController@cadastroView');

Route::get('/produto', 'InstitucionalController@produtoView');

