<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruteur;
use Image;
use Auth;
class RecruteurController extends Controller
{
    //
    public function create(){
        return view('Recruteur.ModifierinfoRec');
         
        }
        public function create_modifier_Rec(){
          $Rec=Recruteur::select('id')->where('user_id','=',Auth::user()->id)->get();
          $rec=Recruteur::find($Rec);
          //hadi $a bash nrecupriw id 
          $a= $rec[0]->id;
          $R=Recruteur::find($a);
          return view('modifierINFOrec')->with('Rec',$R);
      
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
            $Rec->user_id=Auth::user()->id;
            $Rec->save();
            return  redirect('InfoRec/'.$id);
        }
    
           public function index(){
            $Rec=Recruteur::select('id')->where('user_id','=',Auth::user()->id)->get();
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

            public function show(){
              $recruteurs=Recruteur::all();
               return view('entreprises')->with('recruteurs',$recruteurs);
          
          
              }
              public function show1($id){
                //$recruteurs=Recruteur::find($id);
                $recruteurs=Recruteur::select('Nom_Rec','Adresse','Telephone',
                                                'Site_web','Email','user_id'
                                              )->where('id','=',$id)->get();
               
              //  $offres=Offre::all();
                $userid =Recruteur::select('user_id')->where('id','=',$id)->get();
                $u = $userid[0]->user_id;
                
                $offres = Offre::select('id','type','lieuTrav','created_at','nom')->where('rec_id','=',$u)->get();
              //   return view('offres')->with('recruteurs',$recruteurs);
                 return view('offres',compact('recruteurs','offres'));


             
            
            
                }
/*
                public function showOffre(){
                  $list_des_offres=Offre::all();
                   return view('offres')->with('offres',$list_des_offres);
              
              
                  }*/

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
                $Rec->save();
                return  redirect('InfoRec/'.$id);
        
        
            }


            public function avatar_update(Request $request){
              // Logic for user upload of avatar
              if($request->hasFile('avatar')){
                  $avatar = $request->file('avatar');
                  $filename = time() . '.' . $avatar->getClientOriginalExtension();
                  Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename ) );
                  $Cont=Recruteur::select('id')->where('user_id','=',Auth::user()->id)->get();
                  $cont=Recruteur::find($Cont);
                  $a= $cont[0]->id;
                  $Rec=Recruteur::find($a);
                  $Rec->logo_avt = $filename;
                  $Rec->save();
              }
              $Cont=Recruteur::select('id')->where('user_id','=',Auth::user()->id)->get();
                  $cont=Recruteur::find($Cont);
                  $a= $cont[0]->id;
                  $Rec=Recruteur::find($a);
              return view('Recruteur.recruteur')->with('Rec',$Rec);
          }
            
      
        
}
