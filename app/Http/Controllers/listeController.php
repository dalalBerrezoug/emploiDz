<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use DB;
class listeController extends Controller
{
    //
  /*  public function show($domaine){
        
        // $list_des_offres=Offre::all()->where('domaine','=',$domaine);
         
      
        // return view('listeoffre')->with('offres',$list_des_offres);



         $list_des_offres1 = DB::table('offres')
                                
         ->join('recruteurs','recruteurs.user_id','offres.rec_id')
         
         
         ->select('recruteurs.*','offres.*')
         ->where('domaine','=',$domaine)
         
         ->get();
         return view('listeoffre')->with('offres',$list_des_offres1);
     
         }*/


         public function showregion($ville){
        
            // $list_des_offres=Offre::all()->where('domaine','=',$domaine);
             
          
            // return view('listeoffre')->with('offres',$list_des_offres);
    
    
    
             $list_des_offres = DB::table('offres')
                                    
             ->join('recruteurs','recruteurs.user_id','offres.rec_id')
             
             
             ->select('recruteurs.id as idrec','recruteurs.Nom_Rec','offres.*')
             ->where('lieuTrav','=',$ville)
             
             ->get();
             return view('listeregion')->with('offres',$list_des_offres);
         
             }
}
