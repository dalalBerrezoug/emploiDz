<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use Auth;

class FormationController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        
      
        $form = Formation::where('cv_id',Auth::user()->id)->get();
      //  $comp = Formation::where('cv_id',Auth::user()->id)->get();
        
        return view('indexformation',compact('form'));
    }

    public function createform(){
        // return view("cv.index");
        return view('formation.createform');
     }

  
 //enregistrer experience
 public function storeform(Request $request)
 {

     $form = new Formation();
     $form->titreformation = $request->input('titre');
     $form->domaine = $request->input('domaine');
     $form->etablissement = $request->input('etablissement');
     $form->typeetat = $request->input('type');
     $form->datedebut = $request->input('deb');
     $form->datefin = $request->input('fin');
     $form->cv_id = Auth::user()->id;
     $form->save();
     
    
     return redirect('cv');
 }

 public function editform($id)
{
    
    $form = Formation::find($id);
    return view('formation.editform',compact('form'));
}
//modifier


public function updateform(Request $request , $id)
    {
       

        $form = Formation::find($id);
        
        $form->titreformation = $request->input('titre');
        $form->domaine = $request->input('domaine');
        $form->etablissement = $request->input('etablissement');
        $form->typeetat = $request->input('type');
        $form->datedebut = $request->input('deb');
        $form->datefin = $request->input('fin');
       
        $form->save();
      //  return redirect('indexformation');
      return redirect('cv');
    }

}
