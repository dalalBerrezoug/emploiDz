<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Diver;
use App\Cv;
class DiverController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }


    public function AjouterDivers(){
        return view('divers.ajouDivers');
    }
  
    


    public function Insertion_divers(Request $request){
        $cv = Cv::where('user_id',Auth::user()->id)->get();
      $div=new Diver();
       $div->cv_id=$cv[0]->id;
       $div->lang1=$request->input('lang1');
       $div->lang2=$request->input('lang2');
       $div->lang3=$request->input('lang3');
       $div->loisirs1=$request->input('loisir1');
       $div->loisirs2=$request->input('loisir2');
       $div->autre=$request->input('autre');
       $div->save();
       return redirect('Cv_Condidat');
    }


    public function edit_divers($id){
        $div=Diver::find($id);
        return view('divers.editDivers')->with("div",$div);
    }





    public function update($id,Request $request){
        $div=Diver::find($id);
        $div->lang1=$request->input('lang1');
       $div->lang2=$request->input('lang2');
       $div->lang3=$request->input('lang3');
       $div->loisirs1=$request->input('loisir1');
       $div->loisirs2=$request->input('loisir2');
       $div->autre=$request->input('autre');
       $div->save();
       return redirect('Cv_Condidat');
    }
}
