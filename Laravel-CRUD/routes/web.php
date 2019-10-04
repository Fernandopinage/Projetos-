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

//rota do login
route::get('/','funcionarioController@index');
//rota de formulari de cadastro 
route::get('newfuncionario','funcionarioController@createF');
//rota de cadastro controller
route::POST('cadastrar','funcionarioController@store');
