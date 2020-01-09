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
        public function create_modifier_Rec(){
          return view('modifierINFOrec');
      
          }


        public function Store(Request $request,$id){
            $Rec=new Recruteur();
            $Rec->Nom_Rec=$request->input('name');
            $Rec->Adresse=$request->input('adr');
            $Rec->type=$request->input('type');
            $Rec->Logo=$request->input('logo');
            $Rec->Telephone=$request->input('num');
            $Rec->Site_web=$request->input('site');
            $Rec->Email=$request->input('email');
            $Rec->user_id=$id;
            $Rec->save();
            return  redirect('InfoRec/'.$id);
        }
    
           public function index($user_id){
            $Rec=Recruteur::select('id')->where('user_id','=',$user_id)->get();
            if($Rec=='[]'){
            return  redirect('inserRec');
               //echo "hhhhhh";
             }
             
          else{
                //ki nkhadmo b select mat3tinach id drectement ta3tina ga3 ligne
                $rec=Recruteur::find($Rec);
                //hadi $a bash nrecupriw id 
                $a= $rec[0]->id;
                $R=Recruteur::find($a);
                return view('Recruteur.recruteur')->with('Rec',$R);
          }
        
            }


            public function update($id,Request $request)
            {
                $Rec=Recruteur::find($id);
                $Rec->Nom_Rec=$request->input('name');
                $Rec->Adresse=$request->input('adr');
                $Rec->type=$request->input('type');
                $Rec->Logo=$request->input('logo');
                $Rec->Telephone=$request->input('num');
                $Rec->Site_web=$request->input('site');
                $Rec->Email=$request->input('email');
                $Rec->user_id=$id;
                $Rec->save();
                return  redirect('InfoRec/'.$id);
        
        
            }
            
      
        
}
