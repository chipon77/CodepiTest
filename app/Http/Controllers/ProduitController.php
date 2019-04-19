<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
use Illuminate\Support\Facades\DB;
class ProduitController extends Controller
{
   	public function show($n)
	{
		$details=  DB::table('livre')->find($n);
		return view('produit',['details' => $details])->with('numero', $n);
	}

	public function addProduitPage()
	{
		return view('addProduit');
	}

	public function deleteProduit($n)
	{
		$details=  DB::table('livre')->where('id', 1)->update(['affichage' => 0]);
	
		return  redirect()->route('home');
	}

	public function addProduitRequest(Request $request)
	{
		$livre= new livre;

		$livre->titre =$request->input("titre");
		$livre->type =$request->input("type");
		$livre->auteur =$request->input("auteur");
		$livre->editeur =$request->input("editeur");
		$livre->prix =$request->input("prix");
		$livre->affichage=1;
		$livre->save();

		return 'Le nom est ' . $request->input('nom'); 
	}

}
