<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postule;
use Auth;
use App\User;
use App\Notifications\NewOffrePostuler;

class PostuleController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function store(Request $request)
{
    $postule = new Postule();
    
    

    
    $postule->condidat_id = $request->input('condidat');
    $postule->offre_id = $request->input('offres');
    $postule->recruteur_id = $request->input('rec');
    $user = new User();
    $user->id =  $postule->recruteur_id;
    
    
    $user->notify(new NewOffrePostuler($postule));
   // auth()->user()->notify(new NewOffrePostuler($postule));
    
    
    

    $postule->save();
    return redirect('detail/'.$postule->offre_id);
 
}
}
