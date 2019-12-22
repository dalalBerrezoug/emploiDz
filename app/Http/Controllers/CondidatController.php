<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Condidat;

class CondidatController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    


    public function index()
    {
        return view('profil.InserCondidat');
    }
     




    public function story(Request $request)
    {
      $condidat=new Condidat();
      $condidat->user_id=Auth::user()->id;
      $condidat->nom=$request->input('name');
      $condidat->prenom=$request->input('prenom');
      $condidat->email=$request->input('email');
      $condidat->adresse=$request->input('adresse');
      $condidat->telephone=$request->input('telephone');
      $condidat->linkdin=$request->input('linkdin');
      $condidat->datenais=$request->input('datenais');
      $condidat->civilite=$request->input('civilite');
      $condidat->save();
      return redirect('ProfilCondidat');


    }





    public function condidat_Info()
    {
        $cond=Condidat::select('id')->where('user_id','=',Auth::user()->id)->get();
        if($cond!='[]')
        {
           $id_cond=$cond[0]->id;
           $COND=Condidat::find($id_cond);
           return view('profil')->with('cond',$COND);
        }else 
        {
            return redirect('Condidat');
        }
    }




    public function index_update()
    {
       $cond=Condidat::select('id')->where('user_id','=',Auth::user()->id)->get();
       $id_cond=$cond[0]->id;
       $COND=Condidat::find($id_cond);
       return view('profil.editprofil')->with('cond', $COND);
    }



    public function Update_Info(Request $request)
    {
        $cond=Condidat::select('id')->where('user_id','=',Auth::user()->id)->get();
        $id_cond=$cond[0]->id;
        $condidat=Condidat::find($id_cond);  
        $condidat->nom=$request->input('name');
        $condidat->prenom=$request->input('prenom');
        $condidat->email=$request->input('email');
        $condidat->adresse=$request->input('adresse');
        $condidat->telephone=$request->input('telephone');
        $condidat->linkdin=$request->input('linkdin');
        $condidat->datenais=$request->input('datenais');
        $condidat->civilite=$request->input('civilite');
        $condidat->save();
        return redirect('ProfilCondidat'); 
    }
}
