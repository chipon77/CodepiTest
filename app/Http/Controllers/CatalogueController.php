<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
use App\categorie;
use Illuminate\Support\Facades\DB;
class CatalogueController extends Controller
{
  public function index()
	{
		return view('welcome');
	}
	public function home()
	{
	
		$livres=  DB::table('livre')->get();
		$lists=categorie::pluck('nom','id');
		return view('catalogue',['livres' => $livres, 'lists' => $lists]);
	}

}
