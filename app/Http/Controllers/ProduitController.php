<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
   	public function show($n)
	{
		return view('produit')->with('numero', $n);
	}

	public function addProduitPage()
	{
		return view('addProduit');
	}

	public function addProduitRequest(Request $request)
	{
		return 'Le nom est ' . $request->input('nom'); 
	}

}
