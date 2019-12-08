<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruteur;
class RecruteurController extends Controller
{
    //
    public function create(){
        return view('Recruteur.ModifierinfoRec');
    
        }


        public function Store(Request $request){
            $Rec=new Recruteur();
            $Rec->Nom_Rec=$request->input('name');
            $Rec->Adresse=$request->input('adr');
            $Rec->type=$request->input('type');
            $Rec->Logo=$request->input('logo');
            $Rec->Telephone=$request->input('num');
            $Rec->Site_web=$request->input('site');
            $Rec->Email=$request->input('email');
           
            $Rec->save();
           return redirect('InfoRec/'.$Rec->id);
        }
    
           public function index(Request $request,$id){
            $Rec=Recruteur::find($id);
            return view('Recruteur.recruteur')->with('Rec',$Rec);
      
        }
}
