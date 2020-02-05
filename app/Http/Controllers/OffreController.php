<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Postule;
use App\Condidat;
use Auth;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    //
    public function create(){
    return view('Recruteur.AjouterOffre');

    }

    public function Store(Request $request,$rec_id){
        $offre=new Offre();
        $offre->nom=$request->input('nom');
        $offre->intitule=$request->input('intitule');
        $offre->type=$request->input('type');
        $offre->domaine=$request->input('domaine');
        $offre->diplome=$request->input('diplome');
        $offre->lieuTrav=$request->input('lieu');
        $offre->competences=$request->input('comp');
        $offre->duree=$request->input('duree');
        $offre->remuneration=$request->input('remun');
        $offre->debut_prevu=$request->input('debut_prevu');
        $offre->depot_offre=$request->input('depot_offre');
        $offre->description=$request->input('description');
        $offre->rec_id=$rec_id;
        $offre->mois=date('M');
        $offre->anne=date('Y');
        $offre->save();
        return redirect('ConsulterOffre/'.$rec_id);


    }
///la methode pour consulter les offres
    public function index($id_rec){
    $list_des_offres=Offre::all()->where('rec_id','=',$id_rec);
    if($list_des_offres==NULL)
    echo
     "<p align='center' style='color:red'><b>Aucune offre ajoutée pour le moment</b></p>";
    else return view('Recruteur.ConsulterMeOffre')->with('offres',$list_des_offres);


    }
    public function Affiche_Info(Request $request,$id){
        $offres=Offre::find($id);
        $spont=array();
        $postule = DB::table('postules')
                                
                                ->join('recruteurs','recruteurs.user_id','postules.recruteur_id')
                                ->join('condidats','condidats.user_id','postules.condidat_id')
                                ->join('offres','offres.id','postules.offre_id')
                                ->where('offres.id','=',$id)
                                
                                ->select('condidats.*','offres.nom as titre','offres.intitule','offres.rec_id'
                                ,'offres.created_at as cree','postules.*')
                                
                                ->get();
        /*$post=Postule::select('id')->where('offre_id','=',$id)->where('recruteur_id','=',Auth::user()->id)->get();
        
        foreach ($post as $user) {
            $condidat=Condidat::select('*')->where('user_id','=',$user->id)->get();
            array_push($spont,$condidat);
        }*/

       /* foreach ($spont as $user){
        foreach($user as $a){
            echo $a->id."<br>";
            echo $a->nom."<br>";
            echo $a->prenom."<br>";
        }
    }*/
    return view('Recruteur.ShowOffre',compact('offres','postule'));
        //return view('Recruteur.AfficherLesinfOffre')->with('offres',$offres);
    }
    public function edit($id){
        $offre=Offre::find($id);
        return view('Recruteur.ModifierOffre')->with('offre',$offre);

    }
    public function update($id,Request $request)
    {
        $offre=Offre::find($id);
        $offre->nom=$request->input('nom'); 
        $offre->intitule=$request->input('intitule');
        $offre->type=$request->input('type');
        $offre->domaine=$request->input('domaine');
        $offre->diplome=$request->input('diplome');
        $offre->lieuTrav=$request->input('lieu');
        $offre->competences=$request->input('comp');
        $offre->duree=$request->input('duree');
        $offre->remuneration=$request->input('remun');
        $offre->debut_prevu=$request->input('debut_prevu');
        $offre->depot_offre=$request->input('depot_offre');
        $offre->description=$request->input('description');
        $offre->save();
        return redirect('ConsulterOffre/'.Auth::user()->id);


    }
    public function conf(){
    return view('Recruteur.confirmer');
    }





    public function destroy(Request $request,$id){
        $offre=Offre::find($id);
        $offre->delete();
        return redirect('ConsulterOffre/'.Auth::user()->id);
    }
}
