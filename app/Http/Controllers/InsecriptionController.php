<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InsecriptionController extends Controller
{
    //
    public function register(Request $request){
        $register=new User();
        $register->name=$request->input('name');
        $register->email=$request->input('email');
        $register->password=$request->input('password');
        
        if(url()->previous()=='http://localhost:8000/InsecriptionRec'){
            $register->admin=1;
        }
        
        if(url()->previous()=='http://localhost:8000/register'){
            $register->admin=0; 
        }
        $register->save();
        return redirect('tablebord');
    }
}
