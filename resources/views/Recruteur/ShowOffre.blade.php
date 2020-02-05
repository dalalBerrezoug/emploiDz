@extends('layouts.masterRec')
@section('contenu')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Detail d'Offre:<h2 style="color:green">{{$offres->nom}}</h2></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"><!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
                       
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Informations sur l'offre</h3>
                            <!--<p class="text-muted">Add class <code>.table</code></p>-->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            
                                            
                                            <th>Type</th>
                                            <th>Domaine</th>
                                            <th>Diplôme</th>
                                            <th>lieu de travail</th>
                                            <th>Comptences</th>
                                            <th>Rémunération</th>
                                            
                                            </tr>
                                            <tr>
                                            <td>{{$offres->type}}</td>
                                            <td>{{$offres->domaine}}</td>
                                            <td>{{$offres->diplome}}</td>
                                            <td>{{$offres->lieuTrav}}</td>
                                            <td>{{$offres->competences}}</td>
                                            <td>{{$offres->remuneration}}</td>
                                            
                                            
                                            
                                            </tr>
                                            
                                            <tr>
                                            <th>Nombre d'année d'experience</th>
                                            <th>Durée CDD/Stage</th>
                                            <th>Date de dépot d'offre</th>
                                            <th>Date de bébut prévu</th>
                                            <th>Statu</th>
                                        </tr>
                                        <tr>
                                            <td>{{$offres->intitule}}</td>
                                            <td>{{$offres->duree}}</td>
                                            <td>{{$offres->depot_offre}}</td>
                                            <td>{{$offres->debut_prevu}}</td>
                                        
                                            @if($offres->statu == 1)
                                            <td>
                                            Publie
                                            </td>
                                            @endif
                                            @if($offres->statu == 0)
                                            <td>
                                            Retire
                                            </td>
                                            @endif
                                            
                                            
                                            </tr>
                                      
                                     
                                    </thead>
                                    <tbody>
                                   <!--hna nzido les informations d'offres-->
                                    </tbody>
                                </table>
                                <table>
                                <tbody><thead>
                               <tr> <th colspan="4">Description</th></tr>
                               <tr> <td colspan="4">{{$offres->description}}</td></tr>
                                
                                </thead></tbody>
                                </table>

                                <h2 style="color:green" align="center">Les personnes qui postuler cette offre</h2>
                                    <table class="table table-bordered table-striped col-md-12">
                                    <thead>
                        <tr style="width: 200px;">
                           <th style="width: 300px;">Nom</th>
                            <th style="width: 200px;">Prenom</th>
                            <th style="width: 200px;">Email</th>
                            <th style="width: 200px;">Adresse</th>
                            <th style="width: 200px;"></th>
                        </tr>
                    </thead>
                     @foreach ($postule as $user)
            <tr style="width: 200px;"><td>{{$user->nom}}</td><td>{{$user->prenom}}</td><td>{{$user->email}}</td><td>{{$user->adresse}}</td><td><a href="{{url('voir_cv/'.$user->condidat_id)}}">Voir Cv</a></td></tr>   
    
    
    @endforeach
                                    </table>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             </div>
             @stop