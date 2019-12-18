<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RechercheAvanceeController extends Controller
{
    //
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_domaine))
      {
       $data = DB::table('offres')
         ->select('id', 'domaine', 'diplome', 'lieuTrav', 'description')
         ->where('domaine', $request->filter_domaine)
         ->where('lieuTrav', $request->filter_lieuTrav)
         ->get();
         
      }
      else
      {
       $data = DB::table('offres')
         ->select('id', 'domaine', 'diplome', 'lieuTrav', 'description')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
         $lieuTrav = DB::table('offres')
          ->select('lieuTrav')
          ->groupBy('lieuTrav')
          ->orderBy('lieuTrav', 'ASC')
          ->get();


          $domaine = DB::table('offres')
          ->select('domaine')
          ->groupBy('domaine')
          ->orderBy('domaine', 'ASC')
          ->get();


          $diplome = DB::table('offres')
          ->select('diplome')
          ->groupBy('diplome')
          ->orderBy('diplome', 'ASC')
          ->get();
     return view('rechercheavance', compact('lieuTrav','domaine','diplome'));
    }
}
