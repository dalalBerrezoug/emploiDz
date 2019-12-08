@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Liste des offres</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!--<a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
                        <!--<ol class="breadcrumb">
                            <li><a href="index.html">Tableau de bord</a></li>
                            <li class="active">Informations des offres</li>
                        </ol>-->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Informations sur l'offre</h3>
                            <!--<p class="text-muted">Add class <code>.table</code></p>-->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom d'offre</th>
                                            <th>Intitulé</th>
                                            <th>Type</th>
                                            <th>Domaine</th>
                                            <th>Diplôme</th>
                                            <th>lieu de travail</th>
                                            <th></th>
                                        </tr>
                                        @foreach($offres as $offre)
                                        <tr>
                                            <td>{{$offre->id}}</td>
                                            <td>{{$offre->nom}}</td>
                                            <td>{{$offre->type}}</td>
                                            <td>{{$offre->intitule}}</td>
                                            <td>{{$offre->domaine}}</td>
                                            <td>{{$offre->diplome}}</td>
                                            <td>{{$offre->lieuTrav}}</td>
                                         
                                            <td>
                                            <a href="{{url('AfficherInfOffre/'.$offre->id)}}"><span class="oi oi-eye bnt"></span></a>
                                            </td>
                                           
                                            <td>
                                            <a href="{{url('Offre/'.$offre->id.'/modifier')}}" ><span class="oi oi-pencil btn "></span></a>
                                            </td>
                                            <td>
                                            <a href="{{url('Offre/'.$offre->id.'/delete')}}"><span class="oi oi-trash btn" ></span></a>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </thead>
                                    <tbody>
                                   <!--hna nzido les informations d'offres-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @stop