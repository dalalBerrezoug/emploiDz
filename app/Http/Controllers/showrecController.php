<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruteur;
use App\Offre;

class showrecController extends Controller
{
    //
    public function show1($id){
        //$recruteurs=Recruteur::find($id);
        $recruteurs=Recruteur::select('Nom_Rec','Adresse','Telephone',
                                        'Site_web','Email','user_id','type'
                                      )->where('id','=',$id)->get();
       
      //  $offres=Offre::all();
        $userid =Recruteur::select('user_id')->where('id','=',$id)->get();
        $u = $userid[0]->user_id;
        
        $offres = Offre::select('id','type','lieuTrav','created_at','nom')->where('rec_id','=',$u)->get();
      //   return view('offres')->with('recruteurs',$recruteurs);
         return view('offres',compact('recruteurs','offres'));


    
        }
}
