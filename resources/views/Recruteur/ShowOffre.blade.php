@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Detail d' offre :</h4> </div>
                    
                        <div class="form-group">
                        <!--pour quite-->
                        <div class="form-group">
                      <div class="col-md-12">
                      <h2 style="color:green">{{$offres->nom}}<span id="close" class="close"><a href="{{url('ConsulterOffre/'.Auth::user()->id)}}"> &times; </span></a></h2><hr>
                      </div>
                     
                      <!--pour quite-->
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Intitulé:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->intitule}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Domaine:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->domaine}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Diplome:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->diplome}}</label>
                                     </div>
                                    </div>
                                    <br><br><br><br>
                                    <br><br><br>
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Comptences:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->competences}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Lieu de travialle:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->lieu}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Rémunération:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->remuneration}}</label>
                                     </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Durée CDD/Stage:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->duree}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Type D'offre:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->type}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Date de bébut prévu:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->debut_prevu}}</label>
                                     </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Date de dépot d'offre:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->depot_offre}}</label>
                                     </div>
                                     <div class="col-md-8">
                                    <label style="color:black">Description:</label>  
                                    <table>
                                    <tr><td>
                                    <textarea name="description" rows="5" cols="60"  name="description">
                                    {{$offres->description}}
                                          </textarea>
                                    </td></tr>
                                    </table></div></div>
                                    <div class="col-md-12">
                                    <div class="col-md-8">
                                    <label style="color:black">Adresse de travaille:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->lieuTrav}}</label>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <br><br>
                                    <h4 style="color:green">Les personnes qui postuler cette offre</h4>
                                    <table class="table table-bordered table-striped col-md-12">
                                    <thead>
                        <tr style="width: 200px;">
                           <th style="width: 300px;">Nom</th>
                            <th style="width: 200px;">Prenom</th>
                            <th style="width: 200px;">Email</th>
                            <th style="width: 200px;">Adresse</th>
                        </tr>
                    </thead>
                     @foreach ($spont as $user)
        @foreach($user as $a)
            <tr style="width: 200px;"><td>{{$a->nom}}</td><td>{{$a->prenom}}</td><td>{{$a->email}}</td><td>{{$a->adresse}}</td></tr>   
    
    @endforeach
    @endforeach
                                    </table>
                                    
                                    </div>
                                    </div>
                                    
                  
            </div>
            </div>
            @stop