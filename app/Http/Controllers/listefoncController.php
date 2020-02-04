<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use DB;

class listefoncController extends Controller
{
    //
    public function show($domaine){
        
        // $list_des_offres=Offre::all()->where('domaine','=',$domaine);
         
      
        // return view('listeoffre')->with('offres',$list_des_offres);



         $list_des_offres1 = DB::table('offres')
                                
         ->join('recruteurs','recruteurs.user_id','offres.rec_id')
         
         
         ->select('recruteurs.*','offres.*')
         ->where('domaine','=',$domaine)
         
         ->get();
         return view('listeoffre')->with('offres',$list_des_offres1);
     
         }
}
