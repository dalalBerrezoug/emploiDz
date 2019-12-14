<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contect;
use Auth;
class ContectController extends Controller
{
    //
    
    public function create(){
        return view('layouts.mastre2');
    
        }
        public function create_modifier(){
            return view('modifierINFOcontect');
        
            }


        public function Store(Request $request,$id){
            $Rec=new Contect();
            $Rec->nom=$request->input('name');
            $Rec->prenom=$request->input('prenom');
            $Rec->email=$request->input('email');
            $Rec->civilite=$request->input('civilite');
            $Rec->telephone=$request->input('telephone');
            $Rec->fonction=$request->input('fonction');
            $Rec->Rec_id=$id;
            $Rec->save();
           return redirect('AffichageContect/'.$id);
        }

        public function index($id){
            $Cont=Contect::select('id')->where('Rec_id','=',$id)->get();
            if($Cont=='[]'){
                return  redirect('ContectRec');
                   //echo "hhhhhh";
                 }
                 else{
                    //ki nkhadmo b select mat3tinach id drectement ta3tina ga3 ligne
                    $cont=Contect::find($Cont);
                    //hadi $a bash nrecupriw id 
                    $a= $cont[0]->id;
                    $R=Contect::find($a);
                    return view('Recruteur.Profile')->with('Rec',$R);
              }
      
            }
            //mise ajour les information de conect
            public function update($id,Request $request)
            {
                $Rec=Contect::find($id);
                $Rec->nom=$request->input('name');
                $Rec->prenom=$request->input('prenom');
                $Rec->email=$request->input('email');
                $Rec->civilite=$request->input('civilite');
                $Rec->telephone=$request->input('telephone');
                $Rec->fonction=$request->input('fonction');
                $Rec->Rec_id=$id;
                $Rec->save();
                return redirect('AffichageContect/'.$id);
        
        
            }
}
