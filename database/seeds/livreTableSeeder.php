<?php

use Illuminate\Database\Seeder;
use App\livre;
use App\categorie;
use Illuminate\Support\Facades\DB;
class livreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   		for($i = 0; $i < 15; ++$i)
		{
	       DB::table('livre')->insert([
	       	'titre'=> 'Titre'.$i,
	       	'auteur'=> 'auteur'.$i,
	       	'editeur'=> 'editeur'.$i,
	       	'type'=> 'type'.$i,
	       	'prix'=>rand(1, 20) ,
	       	'affichage'=>'1',
    	   ]);
    	}
    }
}
