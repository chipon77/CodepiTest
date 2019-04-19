<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livre', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titre', 100);
            $table->string('type', 100);//roman,BD,manga...
            $table->string('auteur', 100);
            $table->string('editeur', 100);
            $table->float('prix');
            $table->boolean('affichage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('livre');
    }
}
