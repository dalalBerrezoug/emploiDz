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
                                        <tr>
                                            <td>1</td>
                                            <td>mon_offre</td>
                                            <td>ggg</td>
                                            <td>informatique</td>
                                            <td>web</td>
                                            <td>licence+3</td>
                                            <td>Tlemcen</td>
                                            <td><a href="{{url('AfficheOffre')}}"><span class="oi oi-eye"></span></a></td>
                                            <td><a href="{{url('ModifierOffre')}}"><span class="oi oi-pencil"></span></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>mon_offre2</td>
                                            <td>ehh</td>
                                            <td>dddd</td>
                                            <td>oo</td>
                                            <td>bac</td>
                                            <td>Tlemcen</td>
                                            <td><a href="{{url('AfficheOffre')}}"><span class="oi oi-eye"></a></span></td>
                                            <td><a href="{{url('ModifierOffre')}}"><span class="oi oi-pencil"></span></a></td>
                                        </tr>
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