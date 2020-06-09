<?php


Route::get('/', function () {
    return view('welcome');
});


route::resource('/categoria', 'CategoriaController');
Route::get('/categoria/{id}/destroy', 'CategoriaController@destroy');

route::resource('/fornecedor', 'FornecedorController');
Route::get('/fornecedor/{fornecedor}/destroy', 'FornecedorController@destroy');

route::resource('/produto', 'ProdutoController');
Route::get('/produto/{id}/destroy', 'ProdutoController@destroy');

route::resource('/cliente', 'ClienteController');
Route::get('/cliente/{cliente}/destroy', 'ClienteController@destroy');