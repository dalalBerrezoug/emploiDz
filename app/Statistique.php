<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistique extends Model
{
    //
    private $bdd;
    private $req;
    public function __construct(){
        
    }

    //afiche offre de user
    public function Offre($id){
        $bdd= DB::table('offres')->get();
        $req=$bdd->addSelect('nom');
        return $req;
    }
}
