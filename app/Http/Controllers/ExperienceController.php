<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Auth;

class ExperienceController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

     //*************Experience******* */

     public function index(){
        
        $exp = Experience::where('cv_id',Auth::user()->id)->get();
        
        return view('experience',compact('exp'));
    }

    //affiche le form de ceation d'ex
    public function createexp(){
        // return view("cv.index");
        return view('experience.createexp');
     }

  
 //enregistrer experience
 public function storeexp(Request $request)
 {
     $exp = new Experience();
     $exp->titreposte = $request->input('titreposte');
     $exp->entreprise = $request->input('entreprise');
     $exp->datedeb = $request->input('datedeb');
     $exp->datefin = $request->input('datefin');
     $exp->cv_id = Auth::user()->id;
     $exp->save();
     return redirect('cv');
 }

 //recuperer exp et mettre dans form

public function editexp($id)
{
    

    $exp = Experience::find($id);
    return view('experience.editexp',compact('exp'));
}
//modifier


public function updateexp(Request $request , $id)
    {
       

        $exp = Experience::find($id);
        $exp->titreposte = $request->input('titreposte');
        $exp->entreprise = $request->input('entreprise');
       
        $exp->save();
        return redirect('cv');
    }
}
