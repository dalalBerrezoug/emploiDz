<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUseridTableRecruteurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recruteurs', function (Blueprint $table) {
            //
            $table->integer('user_id');
            $table->foreign('user_id')
				  ->references('id')
				  ->on('users')
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
        Schema::table('recruteurs', function (Blueprint $table) {
            //
        });
    }
}
