<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
use App\categorie;


class ProduitController extends Controller
{
	
   	public function show($n)
	{
		$details=  livre::find($n);

		$listcategorie=$details->categorie()->get();//liste categories d'UN produit
		$lists=categorie::pluck('nom','id');////liste de toute les categories
		return view('produit',['details' => $details,'lists' => $lists,'listcategorie' => $listcategorie])->with('numero', $n);
	}

	public function addProduitPage()//envoie la page pour ajouter un nouveau produit
	{
		$lists=categorie::pluck('nom','id');
		return view('addProduit',['lists' => $lists]);
	}

	public function deleteProduit($n)//change la variable affichage dans la BDD 
	{
		$details=  livre::where('id', $n)->update(['affichage' => 0]);
	
		return  redirect()->route('home');
	}

	public function addProduitRequest(Request $request)// ajout d'un produit dans la BDD
	{
		$livre= new livre;

		$livre->titre =$request->titre;
		$livre->type =$request->type;
		$livre->auteur =$request->auteur;
		$livre->editeur =$request->editeur;
		$livre->prix =$request->prix;
		$livre->affichage=1;
		$livre->save();


		$livre->categorie()->attach($request->categorie);// lie a une categorie 

		return redirect()->route('home'); 
	}

	public function editProduitRequest($n,Request $request)
	{
		$livre=  livre::where('id', $n);

		$livre->update(['titre' => $request->titre]);
		$livre->update(['auteur' => $request->auteur]);
		$livre->update(['type' => $request->type]);
		$livre->update(['editeur' => $request->editeur]);
		$livre->update(['prix' => $request->prix]);

		return redirect()->route('details', ['n' => $n]); 
	}

	public function lierProduitRequest(Request $request)//lie une categorie à un produit
	{
		$categorie= categorie::where('id',$request->id_categorie)->first();
		$categorie->livre()->attach($request->id_product);
		return redirect()->route('details', ['n' => $request->id_product]); 
	}

}
