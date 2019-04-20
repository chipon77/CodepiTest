<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivreCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('categorie_livre', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('livre_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->foreign('livre_id')->references('id')->on('livre')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');

            $table->foreign('categorie_id')->references('id')->on('categorie')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categorie_livre', function(Blueprint $table) {
        $table->dropForeign('livre_categorie_livre_id_foreign');
        $table->dropForeign('livre_categorie_categorie_id_foreign');
    });

        Schema::drop('categorie_livre');
    }
}
