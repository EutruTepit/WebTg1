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


//Rotas do Site
Route::group([ 'namespace' => 'Site'],function (){
   Route::get('/','SiteController@index')->name('inicio');
   Route::get('loja','SiteController@loja')->name('loja');
   Route::get('loja/produtos','SiteController@produtos')->name('loja-produtos');
   Route::get('loja/produtos/{id}','SiteController@produto')->name('loja-produto');
   Route::post('loja/produtos/compra','SiteController@compra')->name('produto-compra');
});



Auth::routes();

//Rotas do Painel de Administraçaõ

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => 'auth', 'namespace' => 'Admin'],function (){
    Route::get('produto/cadastro','Produto\ProdutoController@create')->name('produto-cad');
    Route::put('produto/update/{id}','Produto\ProdutoController@update')->name('produto-update');
    Route::get('produto/{id}/edit','Produto\ProdutoController@edit')->name('produto-edit');
    Route::get('produto/{id}/delete','Produto\ProdutoController@delete')->name('produto-delete');
    Route::get('produto','Produto\ProdutoController@index')->name('produto');
    Route::post('produto/store','Produto\ProdutoController@store')->name('produto-store');
    Route::get('/','AdminController@index')->name('admin');
});


