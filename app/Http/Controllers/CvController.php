<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
//use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Experience;
use App\Formation;
use App\Domaine;
use App\Diplome;
use App\Competence;
use App\Document;

class CvController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //lister le cv
    public function index(){
        $cv = Cv::where('user_id',Auth::user()->id)->get();
        
        
      // $form = Formation::all();
      //  $form = Formation::where('cv_id',Auth::user()->id)->get();
      foreach($cv as $cvs)
      {
         $id = $cvs->id;
      } 
      
        $form = Formation::where('cv_id',$id)->get();
        $exp = Experience::where('cv_id',$id)->get();
        $comp = Competence::where('cv_id',$id)->get();
      
      
      
      //  $comp = Competence::all();
        //$comp = Competence::where('cv_id',Auth::user()->id)->get();
        $doc = Document::all();
       // $doc = Document::where('cv_id',Auth::user()->id)->get();
        return view('cv.index',compact('cv','exp','form','dom','comp','doc'));
    }
//affiche le form de ceation de cv
    public function create(){
       // return view("cv.index");
       return view('cv.createcv');
    }
//enregistrer cv
public function store(Request $request)
{
    $cv = new Cv();
    $cv->titre = $request->input('titre');
    $cv->user_id = Auth::user()->id;

    $cv->save();
    return redirect('cv');
}
//recuperer cv et mettre dans form

public function edit($id)
    {
        

        $cv = Cv::find($id);
        return view('cv.editcv',['cv'=>$cv]);
    }
//modifier

public function update(Request $request , $id)
    {
       

        $cv = Cv::find($id);
        $cv->titre = $request->input('titre');
       
        $cv->save();
        return redirect('cv');
    }


//supprimer cv
    public function destroy(){
        
    }

   //*************Experience******* */
    //affiche le form de ceation d'exp
    /*public function createexp(){
        // return view("cv.index");
        return view('experience.createexp');
     }*/

  
 //enregistrer experience
 /*public function storeexp(Request $request)
 {
     $exp = new Experience();
     $exp->titreposte = $request->input('titreposte');
     $exp->entreprise = $request->input('entreprise');
     $exp->datedeb = $request->input('datedeb');
     $exp->datefin = $request->input('datefin');
     $exp->save();
     return redirect('cv');
 }*/

 //recuperer exp et mettre dans form

/*public function editexp($id)
{
    

    $exp = Experience::find($id);
    return view('experience.editexp',compact('exp'));
}*/
//modifier


/*public function updateexp(Request $request , $id)
    {
       

        $exp = Experience::find($id);
        $exp->titreposte = $request->input('titreposte');
        $exp->entreprise = $request->input('entreprise');
       
        $exp->save();
        return redirect('cv');
    }*/

     //*************Competence******* */
    //affiche le form de ceation d'exp
   /* public function createcomp(){
        // return view("cv.index");
        return view('competence.competence');
     }*/

  
 //enregistrer experience
 /*public function storecomp(Request $request)
 {
     $comp = new Competence();
     $comp->competence = $request->input('competence');
     
     $comp->save();
     $cv = new Cv();
     $cv->titre = $request->input('titre');
     $cv->user_id= 1;
      $cv->save();
     return redirect('cv');
 }*/
/* 
 public function editcomp($id)
{
    
    $comp = Competence::find($id);
    return view('competence.editcomp',compact('comp'));
}*/
//modifier
/* 

public function updatecomp(Request $request , $id)
    {
       

        $comp = Competence::find($id);
        $comp->competence = $request->input('competence');
       
        $comp->save();
        return redirect('cv');
    }*/




  

 
   





}
