<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    //
    public function create(){
        return view('layouts.Test2');
    }
       public function store(Request $request){
           
         $test=new Testrec();
         $test->nom=$request->input('name');
         $test->prenom=$request->input('prenom');
         $test->save();
   
       }
}
