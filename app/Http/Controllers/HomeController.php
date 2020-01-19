<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Postule;
use App\Condidat;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role==0){
            return view('accueil');
        }
        if(Auth::user()->role==1){
            //$con = new Condidat();
          //  $postule = Postule::where('recruteur_id',Auth::user()->id)->get();
          //  $postule1 = Postule::where('recruteur_id',Auth::user()->id)->get();
          //  foreach($postule1 as $postule1){
          //     $con->id = $postule1->condidat_id;
           // }
            

                                $postule = DB::table('postules')
                                
                                ->join('recruteurs','recruteurs.user_id','postules.recruteur_id')
                                ->join('condidats','condidats.user_id','postules.condidat_id')
                                ->join('offres','offres.id','postules.offre_id')
                                
                                ->select('condidats.*','offres.nom as titre','offres.intitule','offres.rec_id'
                                ,'offres.created_at as cree','postules.*')
                                
                                ->get();


                                $postule1 = DB::table('postules')
                                
                                ->join('recruteurs','recruteurs.user_id','postules.recruteur_id')
                                ->join('condidats','condidats.user_id','postules.condidat_id')
                                
                                
                                ->select('condidats.*','recruteurs.user_id'
                                ,'postules.typepostule')
                                
                                ->get();

            
      
    
     // $c=Condidat::all()->where('user_id','=',$con->id );
        
        
        return view('Recruteur.TableBorde',compact('postule','postule1'));

           // return view('Recruteur.TableBorde');
        }
        
    }
}
