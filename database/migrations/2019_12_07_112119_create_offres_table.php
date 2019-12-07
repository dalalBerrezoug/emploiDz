<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nom');
            $table->String('intitule');
            $table->enum('type', ['Stage', 'CDD','CDI']);
            $table->String('domaine');
            $table->String('diplome');
            $table->String('lieuTrav');
            $table->String('competences');
            $table->dateTime('duree');
            $table->String('remuneration'); 
            $table->date('debut_prevu');
            $table->date('depot_offre');
            $table->String('description');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
