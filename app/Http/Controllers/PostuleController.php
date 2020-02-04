<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postule;
use Auth;
use App\User;
use App\Condidat;
use App\Offre;
use App\Notifications\NewOffrePostuler;
use App\Cv;
use App\Formation;
use App\Experience;
use App\Competence;
use App\Document;
use App\Diver;


class PostuleController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        
        $postule = Postule::where('recruteur_id',Auth::user()->id)->get();
        
        return view('TableBorde',compact('postule'));
    }

    public function store(Request $request)
{ 
    $postule = new Postule();
   
    $postule->condidat_id = $request->input('condidat');
    $postule->offre_id = $request->input('offres');
    $postule->recruteur_id = $request->input('rec');
    $postule->typepostule = $request->input('type');
    $postule->mois=date('M');
    $postule->anne=date('Y');
    $postule->save();
    
    $user = new User();
    $user->id =  $postule->recruteur_id;
  
    
      $con = new Condidat();
      $con->id = $postule->condidat_id ;
    
      $c=Condidat::all()->where('user_id','=',$postule->condidat_id );
        foreach($c as $c){
      
                $con->nom=$c->nom;
                $con->prenom=$c->prenom;
                
                }

      $off = new Offre();
      $off->id = $postule->offre_id ;

      $o=Offre::all()->where('id','=',$postule->offre_id );
      
      foreach($o as $o){
       
       $off->nom=$o->nom;
       
      
       } $user->notify(new NewOffrePostuler($postule,$con,$off));
     echo "<script>alert('il faut cree titre de cv avant')</script>";
      
      
      
     


    
    //$user->notify(new NewOffrePostuler($postule,$con));
  
    
    
    
  
    
    return redirect('detail/'.$postule->offre_id);
 
}



///voir profile de personne spont///
public function Voir_cv_Spont($id){
            $data=[];
            $photo=Condidat::select('id')->where('user_id','=',$id)->get();
            $id_cond=$photo[0]->id;
            //echo $id_cond;
            $c=Condidat::find($id_cond);
            $data['cond']=$c;
            $cv=Cv::select('id')->where('user_id','=',$id)->get();
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
        return view('cv.Voir_Cv')->with('data',$data);
        }else{
            $data=Null;
            return view('cv.Voir_Cv')->with('data',$data);
            }
}
}
