<?php

use Illuminate\Database\Seeder;
use App\livre;
use App\categorie;
use Illuminate\Support\Facades\DB;

class categorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           		for($i = 0; $i < 5; ++$i)
		{
	       DB::table('categorie')->insert([
	       	'nom'=> 'nom'.$i,
	       
    	   ]);
    	}
    }
}
