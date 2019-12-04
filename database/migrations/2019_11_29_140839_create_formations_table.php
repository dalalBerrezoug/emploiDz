<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            
            $table->increments('id');
            $table->timestamps();
            $table->string('titreformation');
            $table->integer('diplome_id')->unsigned();
            $table->integer('domaine_id')->unsigned();
            $table->date('datedebut');
            $table->date('datefin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
