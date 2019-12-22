<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cv;
use App\Condidat;
class CvCondidatController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function cv_create(){
        return view('cv.AfficheinfoCv');
    }
    public function titre_mon_cv(Request $request){
        $cond=Condidat::select('id')->where('user_id','=',Auth::user()->id)->get();
        if($cond!='[]'){
     $titre_cv=new Cv();
     $titre_cv->user_id=Auth::user()->id;
     $titre_cv->titre=$request->input('titre');
     $titre_cv->save();
     return redirect('Cv_Condidat') ;
    }
    else{
        echo "<script>alert('il faut inserer votre information personel avant creation de cv')</script>";
        return view('profil.InserCondidat');
    }
    }
    public function Afficher_Info_Cv(){
        return view('cv.AfficheinfoCv');
    }

    public function afficher_cv(){
     $cv=CV::select('id')->where('user_id','=',Auth::user()->id)->get();
     if($cv!='[]'){
         $a= $cv[0]->id;
         $CV=Cv::find($a);
         return view('cv.AfficheinfoCv')->with('cv',$CV);
     }
     else {
        return redirect('ajouterCv') ;
     }
    }

}
