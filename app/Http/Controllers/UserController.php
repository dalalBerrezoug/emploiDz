<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\UplodedFile;
//use Illuminate\Http\UploadedFile;
use App\User;
use App\Cv;
use App\Formation;
use App\Experience;
use App\Competence;
use App\Document;
use App\Condidat;
use App\Diver;
class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //lister le cv
    public function index(){
        
        $user = User::all();
       // $user = User::where('user',Auth::user()->id)->get();
        return view('profil',compact('user'));
    }

//recuperer cv et mettre dans form

public function edit($id)
    {
        

        $user = User::find($id);
        return view('profil.editprofil',['user'=>$user]);
    }
//modifier

public function update(Request $request , $id)
    {
       

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->photo = $request->input('photo');
        $user->adresse = $request->input('adresse');
        $user->telephone = $request->input('telephone');
        $user->linkdin = $request->input('linkdin');
        $user->datenais = $request->input('datenais');
        $user->civilite = $request->input('civilite');
       
      
        //$path= $request->file('photo')->store('image');
 
       // $user->photo = $request->file('photo');
       

        
       
        $user->save();
        return redirect('profil');
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


          public function Cv_Condidat()
          {
            $data=[];
            $photo=Condidat::select('id')->where('user_id','=',Auth::user()->id)->get();
            $id_cond=$photo[0]->id;
            $c=Condidat::find($id_cond);
            $data['cond']=$c;
            $cv=Cv::select('id')->where('user_id','=',Auth::user()->id)->get();
            if($cv!='[]'){
                 $id=$cv[0]->id;
                 $CV=Cv::find($id);
                 $cv_id=$CV->id;
                 $div=Diver::where('cv_id',$cv_id)->get();
                 $data['divers']=$div;
                $data['titre']=$CV;
            $experience=Experience::select('id')->where('cv_id','=',$cv_id)->get();
            $competence=Competence::select('id')->where('cv_id','=',$cv_id)->get();
            $formation=Formation::select('id')->where('cv_id','=',$cv_id)->get();
            $document=Document::select('id')->where('cv_id','=',$cv_id)->get();
            if($formation!='[]'){
                $form=Formation::find($formation[0]->id)->all()->where('cv_id','=',$cv_id);
                $data['formation']=$form;
            }else $data['formation']=Null;
            if( $experience!='[]'){
                $exp=Experience::find($experience[0]->id)->all()->where('cv_id','=',$cv_id);
                $data['experience']=$exp;
              //  echo $data['experience'];
            }else $data['experience']=Null;
            if( $competence!='[]'){
                $comp=Competence::find($competence[0]->id)->all()->where('cv_id','=',$cv_id);
                $data['competence']=$comp;
              //  echo $data['experience'];
            }
            else
             $data['competence']=Null;
        if($document!='[]'){
            $doc=Document::find($document[0]->id)->all()->where('cv_id','=',$cv_id);
            $data['document']=$doc;
        }else{ $data['document']=Null;}
        return view('cv.AfficheinfoCv')->with('data',$data);
        }else{
            $data=Null;
            //return view('cv.AfficheinfoCv')->with('data',$data);
            return redirect('titrecv');
            }
          }

  

 
   





}
