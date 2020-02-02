<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cv_id');
            $table->string('lang1')->default('arabic');
            $table->string('lang2')->nullable(true);
            $table->string('lang3')->nullable(true);
            $table->string('loisirs1')->nullable(true);
            $table->string('loisirs2')->nullable(true);
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
        Schema::dropIfExists('divers');
    }
}
