<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
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
	
		return view('catalogue',['livres' => $livres]);
	}

}
