<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contect;
class ContectController extends Controller
{
    //
    public function create(){
        return view('layouts.mastre2');
    
        }


        public function Store(Request $request){
            $Rec=new Contect();
            $Rec->nom=$request->input('name');
            $Rec->prenom=$request->input('prenom');
            $Rec->email=$request->input('email');
            $Rec->civilite=$request->input('civilite');
            $Rec->telephone=$request->input('telephone');
            $Rec->fonction=$request->input('fonction');
            $Rec->save();
           return redirect('AffichageContect/'.$Rec->id);
        }

        public function index(Request $request,$id){
            $Contect=Contect::find($id);
            return view('Recruteur.Profile')->with('Rec',$Contect);
      
        }
}
