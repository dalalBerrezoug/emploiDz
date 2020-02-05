<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Document;
use App\Cv;
use Auth;
use Image;

class DocumentController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
}
   public function index($id){
      return view('document.createdocument')->with('id',$id);
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
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename ) );
        $doc->doc=$filename;
      }
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


    public function Ajouter_Doc(Request $request,$id){
      // Logic for user upload of avatar
      if($request->hasFile('avatar')){
          $avatar = $request->file('avatar');
          $filename = time() . '.' . $avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename ) );
          $Cont=Document::select('id')->where('cv_id','=',$id)->get();
          $cont=Document::find($Cont);
          $a= $cont[0]->id;
          $Rec=Document::find($a);
          $Rec->doc = $filename;
          $Rec->save();
      }
      
      return redirect('Cv_Condidat');
  }
}
