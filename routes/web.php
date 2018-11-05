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

Auth::routes();

Route::get('/home', 'IndexController@index')->name('home');
Route::get('/', 'IndexController@index');
Route::get('/produto/{key?}', 'ProdutosController@detalhe')->name('produto');
Route::get('/categorias/{key?}', 'CategoriasController@index')->name('categorias');
Route::get('/carrinho', 'CarrinhoController@carrinho')->name('carrinho');
Route::post('/carrinho/adicionar/{produto}', 'CarrinhoController@add')->name('adicionar-carrinho');
Route::post('/carrinho/remover/{produto}', 'CarrinhoController@remove')->name('remover-carrinho');
Route::post('/pedido/salvar', 'PedidosController@salvarPedido')->name('salvar-pedido');
Route::get('/meus-pedidos', 'PedidosController@pedidos')->name('meus-pedidos');
Route::get('/pedido/{pedido}', 'PedidosController@detalhe')->name('pedido-detalhe');
Route::get('/buscar', 'BuscaController@busca')->name('busca');
