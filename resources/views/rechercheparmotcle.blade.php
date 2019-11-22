@extends('layouts.master')
@section('content')

<div class="container" style="margin-top: 200px; margin-left: 100px;margin-right: 1000px; " >
        <div class="row" style=" margin-left: 20px;margin-right: 50px; background-color: white;">
            
        <span style="font-size: 30px;">Recherche d'Offres d'emploi par Mot clée</span><br><br><br>
        </div>
        <div style="height: 300px;">
        <div style="margin-top: 5px; margin-left: 20px;margin-right: 50px; background-color: white; " class="row">
            <br><br>
            
               <input type="search" name="recherche" placeholder="entrez un mot clé a rechercher" class=col-lg-10>
               
             
               <input type="submit" class="col-lg-2" value="Rechercher">
              
            </div></div>
            </div>


            @endsection