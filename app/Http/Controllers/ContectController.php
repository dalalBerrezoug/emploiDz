<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contect;
use Auth;
use Image;
class ContectController extends Controller
{
    //
    
    public function create(){
        return view('layouts.mastre2');
    
        }
        public function create_modifier(){
            $Cont=Contect::select('id')->where('Rec_id','=',Auth::user()->id)->get();
            $cont=Contect::find($Cont);
            $a= $cont[0]->id;
            $Rec=Contect::find($a);
            return view('modifierINFOcontect')->with('Rec',$Rec);
        
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
            public function update(Request $request)
            {
                $Cont=Contect::select('id')->where('Rec_id','=',Auth::user()->id)->get();
                $cont=Contect::find($Cont);
                $a= $cont[0]->id;
                $Rec=Contect::find($a);
                $Rec->nom=$request->input('nom');
                $Rec->prenom=$request->input('prenom');
                $Rec->email=$request->input('email');
                $Rec->civilite=$request->input('civilite');
                $Rec->telephone=$request->input('telephone');
                $Rec->fonction=$request->input('fonction');
                $Rec->avatar=$Rec->avatar;
                $Rec->Rec_id=Auth::user()->id;
                $Rec->save();
                return redirect('AffichageContect/'.Auth::user()->id);
        
        
            }



            public function update_avatar(Request $request){
                // Logic for user upload of avatar
                if($request->hasFile('avatar')){
                    $avatar = $request->file('avatar');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename ) );
                    $Cont=Contect::select('id')->where('Rec_id','=',Auth::user()->id)->get();
                    $cont=Contect::find($Cont);
                    $a= $cont[0]->id;
                    $Rec=Contect::find($a);
                    $Rec->avatar = $filename;
                    $Rec->save();
                }
                $Cont=Contect::select('id')->where('Rec_id','=',Auth::user()->id)->get();
                    $cont=Contect::find($Cont);
                    $a= $cont[0]->id;
                    $Rec=Contect::find($a);
                return view('Recruteur.Profile')->with('Rec',$Rec);
            }
}
