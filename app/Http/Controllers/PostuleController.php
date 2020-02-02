<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postule;
use Auth;
use App\User;
use App\Condidat;
use App\Offre;
use App\Notifications\NewOffrePostuler;


class PostuleController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        
        $postule = Postule::where('recruteur_id',Auth::user()->id)->get();
        
        return view('TableBorde',compact('postule'));
    }

    public function store(Request $request)
{ 
    $postule = new Postule();
   
    $postule->condidat_id = $request->input('condidat');
    $postule->offre_id = $request->input('offres');
    $postule->recruteur_id = $request->input('rec');
    $postule->typepostule = $request->input('type');
    $postule->save();
    
    $user = new User();
    $user->id =  $postule->recruteur_id;
  
    
      $con = new Condidat();
      $con->id = $postule->condidat_id ;
    
      $c=Condidat::all()->where('user_id','=',$postule->condidat_id );
        foreach($c as $c){
      
                $con->nom=$c->nom;
                $con->prenom=$c->prenom;
                
                }

      $off = new Offre();
      $off->id = $postule->offre_id ;

      $o=Offre::all()->where('id','=',$postule->offre_id );
      
      foreach($o as $o){
       
       $off->nom=$o->nom;
       
      
       } $user->notify(new NewOffrePostuler($postule,$con,$off));
     echo "<script>alert('il faut cree titre de cv avant')</script>";
      
      
      
     


    
    //$user->notify(new NewOffrePostuler($postule,$con));
  
    
    
    
  
    
    return redirect('detail/'.$postule->offre_id);
 
}
}
