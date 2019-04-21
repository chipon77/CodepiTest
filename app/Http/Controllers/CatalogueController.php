<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
use App\categorie;

class CatalogueController extends Controller
{
	public function home()//page d'accueil renvoie les livres pour les afficher et les categories pour les modifier
	{
	
		$livres=livre::where('affichage','=',1)->paginate(9);
		$lists=categorie::pluck('nom','id');
		return view('catalogue',['livres' => $livres, 'lists' => $lists]);
	}

}
