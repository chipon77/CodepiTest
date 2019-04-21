<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorie;


class CategorieController extends Controller
{
	public function addCategorieRequest(Request $request)//sauvegarde dans la BDD la nouvelle catégorie et renvoie à la page d'accueil 
	{
		$categorie= new categorie;
		$categorie->nom =$request->nom;
		$categorie->save();

		return redirect()->route('home'); 
	}


		public function editCategorieRequest(Request $request)//sauvegarde dans la BDD la modification de catégorie et renvoie à la  page d'accueil 
	{

		$categorie=  categorie::where('id', $request->id_categorie);

		$categorie->update(['nom' => $request->categorie_nom]);

		return  redirect()->route('home'); 
	}
}
