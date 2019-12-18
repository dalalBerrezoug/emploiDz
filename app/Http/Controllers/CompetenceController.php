<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competence;
use Auth;
use App\Cv;

class CompetenceController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        
        $comp = Competence::all();
        $comp = Competence::where('cv_id',Auth::user()->id)->get();
        
        return view('indexcompetence',compact('comp'));
    }

    public function createcomp(){
        // return view("cv.index");
        return view('competence.competence');
     }

  
 //enregistrer experience
 public function storecomp(Request $request)
 {

     $comp = new Competence();
     $comp->competence = $request->input('competence');
     $cv = Cv::where('user_id',Auth::user()->id)->get();
     foreach($cv as $cv)
     {
        $comp->cv_id = $cv->id;
     } 
     $comp->save();
     
    
     return redirect('cv');
 }

 public function editcomp($id)
{
    
    $comp = Competence::find($id);
    return view('competence.editcomp',compact('comp'));
}
//modifier


public function updatecomp(Request $request , $id)
    {
       

        $comp = Competence::find($id);
        $comp->competence = $request->input('competence');
       
        $comp->save();
       // return redirect('indexcompetence');
       return redirect('cv');
    }

}
