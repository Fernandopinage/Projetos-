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



Route::get('/', 'noticiaController@index');
Route::get('forme_create', 'noticiaController@create');
Route::POST('salvar_noticia','noticiaController@store');
Route::get('gerenciar','noticiaController@option');


// excluir registro 

route::get('excluir/{id}','noticiaController@destroy');

// editar e update

route::get('editar/{id}','noticiaController@edit');
route::POST('/update/{id}','noticiaController@update');