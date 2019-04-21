<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
use App\categorie;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
   	public function show($n)
	{
		$details=  livre::find($n);

		$licrecategorie=$details->categorie()->get();
		$categories=DB::table('categorie')->get();//liste de toute les categories en collection
		$lists=categorie::pluck('nom','id');////liste de toute les categories en list
		return view('produit',['details' => $details,'categories' => $categories,'lists' => $lists,'licrecategorie' => $licrecategorie])->with('numero', $n);
	}

	public function addProduitPage()
	{
		$lists=categorie::pluck('nom','id');
		return view('addProduit',['lists' => $lists]);
	}

	public function deleteProduit($n)
	{
		$details=  DB::table('livre')->where('id', $n)->update(['affichage' => 0]);
	
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


		$livre->categorie()->attach($request->categorie);

		return redirect()->route('home'); 
	}

	public function editProduitRequest($n,Request $request)
	{
		$livre=  DB::table('livre')->where('id', $n);

		$livre->update(['titre' => $request->input("titre")]);
		$livre->update(['auteur' => $request->input("auteur")]);
		$livre->update(['type' => $request->input("type")]);
		$livre->update(['editeur' => $request->input("editeur")]);
		$livre->update(['prix' => $request->input("prix")]);

		return redirect()->route('details', ['n' => $n]); 
	}

	public function lierProduitRequest(Request $request)//lie une categorie à un produit
	{
		$categorie= categorie::where('id',$request->id_categorie)->first();
		$categorie->livre()->attach($request->id_product);
		return redirect()->route('details', ['n' => $request->id_product]); 
	}

}
