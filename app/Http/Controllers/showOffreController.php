<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Recruteur;
use Illuminate\Support\Facades\DB;

class showOffreController extends Controller
{
    //
   /* public function show($id){
        // $list_des_offres=Offre::find($id);
         $offres=Offre::all()->where('id','=',$id);
         $Rec=Recruteur::all();
      
         // return view('entreprises')->with('offres',$list_des_offres);
 
        // $list_des_offre =Offre::select('id')->where('id','=',$id)->get();
         return view('detail',compact('offres','Rec'));
     
         }*/








         public function show($id){
        
            
            // $list_des_offres=Offre::all()->where('id','=',$id);
            $Rec=Recruteur::all();
             $offres = DB::table('offres')
             
                                    
             ->join('recruteurs','recruteurs.user_id','offres.rec_id')
             ->where('offres.id','=',$id)
             
             
             
             ->select('recruteurs.*','offres.*')
             
             ->get();
             if($id==0) 
            
             {
                 echo "<script>alert('Votre Condidature a ete bien Envoyé');</script>";
 
                 return redirect('ProfilCondidat');}
            // return view('detail')->with('offres',$list_des_offres);
            return view('detail',compact('offres','Rec'));
            //return view('detail')->with('offres',$ent);
            
             }
}
