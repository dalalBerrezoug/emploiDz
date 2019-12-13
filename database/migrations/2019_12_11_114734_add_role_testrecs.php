<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleTestrecs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testrecs', function (Blueprint $table) {
            //
            $url1='http://localhost:8000/Test';
           $url2='http://localhost:8000/Test2';
           $u=url()->previous();
           if($u==$url1){
           $table->integer('role')->default(1);
        }
        if($u==$url2){
            $table->integer('role')->default(0);
       }
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testrecs', function (Blueprint $table) {
            //
        });
    }
}
