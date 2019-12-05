<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
    //
    public function index(){
        
        $doc = Document::all();
      //  $doc = Document::where('cv_id',Auth::user()->id)->get();
        
        return view('indexdocument',compact('comp'));
    }
      //affiche le form de ceation d'exp
      public function createdoc(){
        
        return view('document.createdocument');
     }
    //enregistrer document
 public function storedoc(Request $request)
 {
    
 
     $doc = new Document();
     $doc->titre = $request->input('titre');
     $doc->type = $request->input('type');
     $path= $request->file('file')->store('image');
 
   $doc->file = $request->file('file');
     
     $doc->save();
     return redirect('cv');
 }
 public function editdoc($id)
{
    
    $doc = Document::find($id);
    return view('document.editdoc',compact('doc'));
}
//modifier


public function updatedoc(Request $request , $id)
    {
       

        $doc = Document::find($id);
        $doc->titre = $request->input('titre');
       // $doc->file = $request->input('titre');
       
        $doc->save();
        return redirect('cv');
    }
}

