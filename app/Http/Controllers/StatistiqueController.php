<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Charts;
use App\User;
use App\Statistique;
use Auth;
use App\Recruteur;
use App\Offre;
use Illuminate\Support\Facades\DB;
class StatistiqueController extends Controller
{
    //
    public function stat_graphe(Request $req){
       $a=$req->input('anne_stat');
        $CDD = DB::table('offres')->select('type')->where('type','=','CDD')->where('rec_id','=',Auth::user()->id)->where('mois','=',date('M'))->where('anne','=',$a)->count();
        $CDI=  DB::table('offres')->select('type')->where('type','=','CDI')->where('rec_id','=',Auth::user()->id)->where('mois','=',date('M'))->where('anne','=',$a)->count();
        $Stage=DB::table('offres')->select('type')->where('type','=','Stage')->where('rec_id','=',Auth::user()->id)->where('mois','=',date('M'))->where('anne','=',$a)->count();
     
  $lava = new Lavacharts;
  $finances = \Lava::DataTable();
  $finances->addStringColumn('Mois')
           ->addNumberColumn('CDD')
           ->addNumberColumn('CDI')
           ->addNumberColumn('Stage');
           $finances
           ->addRow(['Janvier',0,0,0])
           ->addRow(['Février',$CDD,$CDI,$Stage])
           ->addRow(['Mars',0,0,0])
           ->addRow(['Avril',0,0,0])
           ->addRow(['Mai',0,0,0])
           ->addRow(['Juin',0,0,0])
           ->addRow(['Juillet',0,0,0])
           ->addRow(['Août',0,0,0])
           ->addRow(['Septembre',0,0,0])
           ->addRow(['Octobre',0,0,0])
           ->addRow(['Novembre',0,0,0])
           ->addRow(['Décembre',0,0,0])
        ;
           $finances =\Lava::ColumnChart('Finances', $finances, [
              'title' => 'Nombre  d\'offre par mois de chaque type',
              'titleTextStyle' => [
                  'color'    => '#eb6b2c',
                  'fontSize' => 10
              ]
          ]);
  
          
////////////////////////cercle////////////////////////////  
$l = new Lavacharts;

    $reasons =\Lava::DataTable();

    $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(array('Telemcen',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','tlemcen')->where('anne','=',$a)->count()))
            ->addRow(array('Oran',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','oran')->where('anne','=',$a)->count()))
            ->addRow(array('Algerie',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','algerie')->where('anne','=',$a)->count()))
            ->addRow(array('Chlef',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Chlef')->where('anne','=',$a)->count()))
            ->addRow(array('Laghouat',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Laghouat')->where('anne','=',$a)->count()))
            ->addRow(array('Oum El Bouaghi',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Oum El Bouaghi')->where('anne','=',$a)->count()))
            ->addRow(array('Batna',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Batna')->where('anne','=',$a)->count()))
            ->addRow(array('Béjaïa',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Béjaïa')->where('anne','=',$a)->count()))
            ->addRow(array('Biskra',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Biskra')->where('anne','=',$a)->count()))
            ->addRow(array('Béchar',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Béchar')->where('anne','=',$a)->count()))
            ->addRow(array('Blida',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Blida')->where('anne','=',$a)->count()))
            ->addRow(array('Bouira',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Bouira')->where('anne','=',$a)->count()))
            ->addRow(array('Tamanrasset',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Tamanrasset')->where('anne','=',$a)->count()))
            ->addRow(array('Tébessa',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Tébessa')->where('anne','=',$a)->count()))
            ->addRow(array('Tiaret',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Tiaret')->where('anne','=',$a)->count()))
            ->addRow(array('Tizi Ouzou',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Tizi Ouzou')->where('anne','=',$a)->count()))
            ->addRow(array('Djelfa',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Djelfa')->where('anne','=',$a)->count()))
            ->addRow(array('Jijel',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Jijel')->where('anne','=',$a)->count()))
            ->addRow(array('Sétif',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Sétif')->where('anne','=',$a)->count()))
            ->addRow(array('Saida',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Saida')->where('anne','=',$a)->count()))
            ->addRow(array('Saida',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Saida')->where('anne','=',$a)->count()))
            ->addRow(array('Saida',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Saida')->where('anne','=',$a)->count()))
            ->addRow(array('Skikda',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Skikda')->where('anne','=',$a)->count()))
            ->addRow(array('Sidi Bel Abbès',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Sidi Bel Abbès')->where('anne','=',$a)->count()))
            ->addRow(array('Annaba',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Annaba')->where('anne','=',$a)->count()))
            ->addRow(array(' Guelma',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Guelma')->where('anne','=',$a)->count()))
            ->addRow(array('Constantine',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Constantine')->where('anne','=',$a)->count()))
            ->addRow(array('Adrar',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('lieuTrav','=','Adrar')->where('anne','=',$a)->count()));


    $donutchart =\Lava::DonutChart('IMDB', $reasons, [
                    'title' => 'Nombre d\'offre pour les wilaya d\'Algerie'
                ]);          

                //return view('Recruteur.TableBorde',compact('lava'));
//////////////////////////////////////////Line/////////////////////////////
$line = new Lavacharts;
$lolo =\Lava::DataTable();
$lolo->addStringColumn('Mois')
->addNumberColumn('offre');
$lolo->addRow(['Janvier',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=','jan')->where('anne','=',$a)->count()])
->addRow(['Février',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',2)->where('anne','=',$a)->count()])
->addRow(['Mars',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',3)->where('anne','=',$a)->count()])
->addRow(['Avril',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',4)->where('anne','=',$a)->count()])
->addRow(['Mai',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',5)->where('anne','=',$a)->count()])
->addRow(['Juin',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',6)->where('anne','=',$a)->count()])
->addRow(['Juillet',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',7)->where('anne','=',$a)->count()])
->addRow(['Août',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',8)->where('anne','=',$a)->count()])
->addRow(['Septembre',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',9)->where('anne','=',$a)->count()])
->addRow(['Octobre',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',10)->where('anne','=',$a)->count()])
->addRow(['Novembre',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',11)->where('anne','=',$a)->count()])
->addRow(['Décembre',DB::table('offres')->where('rec_id','=',Auth::user()->id)->where('mois','=',12)->where('anne','=',$a)->count()]);
$p=\Lava::LineChart('LINE',$lolo, [
    'title' => 'Nombre  d\'offre par mois'
]);

///////////////////////////////////////postule and spontane//////////////////

$rec=Recruteur::select('id')->where('user_id','=',Auth::user()->id)->get();
$A= $rec[0]->id;
$post=DB::table('postules')->where('recruteur_id','=',Auth::user()->id)->where('typepostule','=',0)->where('anne','=',$a)->where('mois','=','Feb')->count();
$spont=DB::table('postules')->where('recruteur_id','=',Auth::user()->id)->where('typepostule','=',1)->where('anne','=',$a)->where('mois','=','Feb')->count();
$postule = \Lava::DataTable();
$postule->addStringColumn('Mois')
         ->addNumberColumn('Post')
         ->addNumberColumn('Spont');
         $postule
         ->addRow(['Janvier',0,0,])
         ->addRow(['Février',$post,$spont])
         ->addRow(['Mars',0,0])
         ->addRow(['Avril',0,0])
         ->addRow(['Mai',0,0])
         ->addRow(['Juin',0,0])
         ->addRow(['Juillet',0,0])
         ->addRow(['Août',0,0])
         ->addRow(['Septembre',0,0])
         ->addRow(['Octobre',0,0])
         ->addRow(['Novembre',0,0])
         ->addRow(['Décembre',0,0])
      ;
         $postule =\Lava::ColumnChart('Postule', $postule, [
            'title' => 'Nombre  d\'offre postule et spontané par mois',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 10
            ]
        ]);
///////////////////////////fin de postule////////////////
                return  view('Recruteur.statistique');
                             

    }










    //////2eme fonction//////////////////
    /*public function graphe(){
        $lava = new Lavacharts;

    $reasons = $lava->DataTable();

    $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(array('Check Reviews', 5))
            ->addRow(array('Watch Trailers', 2))
            ->addRow(array('See Actors Other Work', 4))
            ->addRow(array('Settle Argument', 89));


    $donutchart = $lava->DonutChart('IMDB', $reasons, [
                    'title' => 'Reasons I visit IMDB'
                ]);


    return $lava;


    }*/
}
