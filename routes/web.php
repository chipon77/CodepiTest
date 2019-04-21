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


Route::get('catalogue/', 'CatalogueController@home')->name('home'); //page d'accueil

Route::get('produit/{n}', 'ProduitController@show')->where("n", '[0-9]+')->name('details');//page détails produit

Route::get('produit/add', 'ProduitController@addProduitPage');// page ajout produit

Route::get('produit/delete/{n}', 'ProduitController@deleteProduit');//suprime produit

Route::post('produit/add', 'ProduitController@addProduitRequest')->name('add');// envoie données produit ajouté

Route::post('categorie/add', 'CategorieController@addCategorieRequest')->name('addC');

Route::post('categorie/edit', 'CategorieController@editCategorieRequest');

Route::post('produit/edit/{n}', 'ProduitController@editProduitRequest');

Route::post('produit/lier', 'ProduitController@lierProduitRequest');