<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Charts;
use App\User;
use Auth;
use App\Offre;
use Illuminate\Support\Facades\DB;
class StatistiqueController extends Controller
{
    //
    public function stat_graphe(){
        $users = DB::table('offres')->select(DB::raw('count(*) as a'))
        ->where('rec_id','=',Auth::user()->id)
        ->get();
        $coun_offre= $users[0]->a;
       /* $anne = DB::table('offres')->select(DB::raw('distinct YEAR(created_at) as anne'))
        ->get();
        echo $anne[0]->anne;*/
  $lava = new Lavacharts;
  $finances = \Lava::DataTable();
  $finances->addStringColumn('Mois')
           ->addNumberColumn('offre');
           $finances->addRow([2019,0])
           ->addRow([2019,0])
           ->addRow([2019,0])
           ->addRow([2019,0])
           ->addRow([2019,0])
           ->addRow([2019,0]);
           $finances =\Lava::ColumnChart('Finances', $finances, [
              'title' => 'Nombre  d\'offre par mois',
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
            ->addRow(array('Telemcen',1))
            ->addRow(array('Oran',1))
            ->addRow(array('Algerie',1))
            ->addRow(array('Chlef',1))
            ->addRow(array('Laghouat',1))
            ->addRow(array('Oum El Bouaghi',1))
            ->addRow(array('Batna',1))
            ->addRow(array('Béjaïa',1))
            ->addRow(array('Biskra',1))
            ->addRow(array('Béchar',15))
            ->addRow(array('Blida',1))
            ->addRow(array('Bouira',1))
            ->addRow(array('Tamanrasset',1))
            ->addRow(array('Tébessa',1))
            ->addRow(array('Tiaret',1))
            ->addRow(array('Tizi Ouzou',1))
            ->addRow(array('Djelfa',1))
            ->addRow(array('Jijel',1))
            ->addRow(array('Sétif',1))
            ->addRow(array('Saïda',1))
            ->addRow(array('Skikda',1))
            ->addRow(array('Sidi Bel Abbès',1))
            ->addRow(array('Annaba',1))
            ->addRow(array(' Guelma',1))
            ->addRow(array('Constantine',1))
            ->addRow(array('Adrar',1));


    $donutchart =\Lava::DonutChart('IMDB', $reasons, [
                    'title' => 'Nombre d\'offre pour les wilaya d\'Algerie'
                ]);          

                //return view('Recruteur.TableBorde',compact('lava'));
//////////////////////////////////////////Line/////////////////////////////
$line = new Lavacharts;
$lolo =\Lava::DataTable();
$lolo->addStringColumn('Mois')
->addNumberColumn('offre');
$lolo->addRow(['Janvier',8])
->addRow(['Février',78])
->addRow(['Mars',45])
->addRow(['Avril',8])
->addRow(['Mai',4])
->addRow(['Juin',9])
->addRow(['Juillet',0])
->addRow(['Août',0])
->addRow(['Septembre',52])
->addRow(['Octobre',0])
->addRow(['Novembre',78])
->addRow(['Décembre',78]);
$p=\Lava::LineChart('LINE',$lolo, [
    'title' => 'Nombre  d\'offre par mois'
]);
                return  view('Recruteur.TableBorde'); 
                             

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
