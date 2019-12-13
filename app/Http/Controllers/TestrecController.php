<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testrec;
class TestrecController extends Controller
{
    //
 public function create(){
     return view('layouts.Test');
 }
    public function store(Request $request){
        $url='http://localhost:8000/Test';
        $u=url()->previous();
      $test=new Testrec();
      $test->nom=$request->input('name');
      $test->prenom=$request->input('prenom');
      $test->save();

    }
}
