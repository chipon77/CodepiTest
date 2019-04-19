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

Route::get('/', 'CatalogueController@index');
Route::get('catalogue/', 'CatalogueController@home');

Route::get('produit/{n}', 'ProduitController@show')->where('n', '[0-9]+');
Route::get('produit/add', 'ProduitController@addProduitPage');
Route::post('produit/add', 'ProduitController@addProduitRequest');