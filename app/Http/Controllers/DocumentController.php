<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Document;
use App\Cv;
use Auth;

class DocumentController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
}
   public function index(){
      return view('document.createdocument');
    }




    public function story(Request $request)
    {
      $cv=Cv::select('id')->where('user_id','=',Auth::user()->id)->get();
      if($cv!='[]'){
      $id=$cv[0]->id;
      $CV=Cv::find($id);
      $cv_id=$CV->id;
      $doc=new Document();
      $doc->cv_id=$cv_id;
      $doc->titre=$request->input('titre');
      $doc->type=$request->input('type');
      $doc->save();
      return redirect('Cv_Condidat');
    }else{
      $data=Null;
      echo "<script>alert('il faut cree titre de cv avant')</script>";
      return view('cv.AfficheinfoCv')->with('data',$data);
      }
    }


    public function index_update($id_doc)
    {
        $doc=Document::find($id_doc);
        return view('document.editdoc')->with('doc',$doc);
    }

    public function Update_Document($id_doc,Request $request)
    {
      $doc=Document::find($id_doc);
      $doc->titre=$request->input('titre');
      $doc->type=$request->input('type');
      $doc->save();
      return redirect('Cv_Condidat');
    }
}
