<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Auth;
use App\Cv;

class ExperienceController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

     //*************Experience******* */

     public function index(){
       return view('experience.createexp'); 
        
    }


    public function stroy(Request $request)
    {
        $cv=Cv::select('id')->where('user_id','=',Auth::user()->id)->get();
        if($cv!='[]'){
        $id=$cv[0]->id;
        $CV=Cv::find($id);
        $cv_id=$CV->id;
        $exp=new Experience();
        $exp->cv_id=$cv_id;
        $exp->titreposte=$request->input('titreposte');
        $exp->entreprise=$request->input('entreprise');
        $exp->date_deb=$request->input('datedeb');
        $exp->date_fin=$request->input('datefin');
        $exp->save();
        return redirect('Cv_Condidat');
        }else{
            $data=Null;
            echo "<script>alert('il faut cree titre de cv avant')</script>";
            return view('cv.AfficheinfoCv')->with('data',$data);
            }
        

    }


    public function index_update($id_exp)
    {
      $exp=Experience::find($id_exp);
      return view('experience.editexp')->with('exp',$exp);
    }


    public function Update_Experience($id_exp,Request $request)
    {
        $exp=Experience::find($id_exp);
        $exp->titreposte=$request->input('titreposte');
        $exp->entreprise=$request->input('entreprise');
        $exp->date_deb=$request->input('datedeb');
        $exp->date_fin=$request->input('datefin');
        $exp->save();
        return redirect('Cv_Condidat');
    }

   
}
