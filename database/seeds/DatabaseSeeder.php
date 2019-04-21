<?php

use Illuminate\Database\Seeder;
use App\livre;
use App\categorie;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(livreTableSeeder::class);
        $this->call(categorieTableSeeder::class);
        $this->call(categorieLivreTableSeeder::class);
    }
}
