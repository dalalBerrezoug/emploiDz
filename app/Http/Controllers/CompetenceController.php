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
        
       return view('competence.competence');
    }

   public function story(Request $req)
   {
    $cv=Cv::select('id')->where('user_id','=',Auth::user()->id)->get();
    if($cv!='[]'){
    $id=$cv[0]->id;
    $CV=Cv::find($id);
    $cv_id=$CV->id;
    $comp=new Competence();
    $comp->cv_id=$cv_id;
    $comp->competence=$req->input('competence');
    $comp->save();
    return redirect('Cv_Condidat');
}else{
    $data=Null;
    echo "<script>alert('il faut cree titre de cv avant')</script>";
    return view('cv.AfficheinfoCv')->with('data',$data);
    }
   }
}
