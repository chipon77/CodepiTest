<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorie;
use Illuminate\Support\Facades\DB;


class CategorieController extends Controller
{
	public function addCategorieRequest(Request $request)
	{
		$categorie= new categorie;
		$categorie->nom =$request->input("nom");
		$categorie->save();

		return redirect()->route('home'); 
	}
}
