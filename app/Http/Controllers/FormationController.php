<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Cv;
use Auth;

class FormationController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    


    public function index(){
        return view('formation.createform');
    }
    
    public function story(Request $request)
    {
        $cv=Cv::select('id')->where('user_id','=',Auth::user()->id)->get();
        if($cv!='[]'){
        $id=$cv[0]->id;
        $CV=Cv::find($id);
        $cv_id=$CV->id;
        $formation=new Formation();
        $formation->cv_id=$cv_id;
        $formation->titreformation=$request->input('titre');
        $formation->datedebut=$request->input('deb');
        $formation->datefin=$request->input('fin');
        $formation->type_etat=$request->input('type');
        $formation->domaine=$request->input('domaine');
        $formation->lieu_formation=$request->input('etablissement');
        $formation->save();
        //$form=Formation::all()->where('cv_id','=',$cv_id);
       // echo $form;
        return redirect('Cv_Condidat');
    }else{
        $data=Null;
        echo "<script>alert('il faut cree titre de cv avant')</script>";
        return view('cv.AfficheinfoCv')->with('data',$data);
        }

    }

}
