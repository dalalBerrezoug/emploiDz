@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tableau de bord</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light"><a href="{{url('AjouterOffre')}}">Ajouter Offre</a>
                        <ol class="breadcrumb">
                           <!-- <li><a href="#">Tableau de bord</a></li>-->
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Les offres poste</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">Les Noveaux projets</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">Statistique de condidates</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary">157</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!--row -->
                <!--<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Sales Difference</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #dadada;"></i>Site A View</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>Site B View</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                </div>-->
                <!--row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Les Nouveaux Offres
                                <div class="col-md-2 col-sm-4 col-xs-12 pull-right">
                                    <select class="form-control pull-right row b-none">
                                        <option>March 2020</option>
                                        <option>April 2021</option>
                                        <option>May 2020</option>
                                        <option>June 2016</option>
                                        <option>July 2016</option>
                                    </select>
                                </div>
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Nom d'offre</th>
                                            <th>date de dépôt d'offre</th>
                                            <th>Etat staut d'offre</th><!--wach raha publiye wala retirie-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <tr>
                                            <td class="txt-oflo">nom de mon offre</td>
                                            <td>13/11/2019</td>
                                            <td class="txt-oflo">publie</td>
                                        </tr>
                                    </tbody>
                                </table></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">

                <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Les offres Postulés</h3>
                            @foreach($postule as $postule)

                                @if($postule->rec_id == Auth::user()->id and $postule->typepostule == 0 )
                                

                            <div class="comment-center">
                                
                                
                                <div class="comment-body b-none">
                                    <div class="user-img"> <img src="{{asset('pixel/plugins/images/users/arijit.jpg')}}" alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>{{$postule->prenom}} {{$postule->nom}}</h5> <span class="mail-desc"> a Postulé {{$postule->titre}}   <span class="time pull-right"> le {{$postule->cree}}</span></span>
                                       
                                        <span class="time pull-left"><a href="#"> <strong>Voir son CV</strong></a> </span>
                                         <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><br>
                                         
                                         <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a></div>
                                </div><hr>
                            </div>
                            @endif
                            @endforeach 

                           
                            
                           
                        </div>
                    </div>

                <!-- ************************** -->
               <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Les Condidatures Spontanné</h3>
                            @foreach($postule1 as $postule1)
                            @if($postule1->user_id == Auth::user()->id and $postule1->typepostule == 1 )

                            

                            <div class="comment-center">
                                
                                
                                <div class="comment-body b-none">
                                    <div class="user-img"> <img src="{{asset('pixel/plugins/images/users/arijit.jpg')}}" alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>{{$postule1->prenom}} {{$postule1->nom}}</h5> <span class="mail-desc"> a vous envoyer une condidature <span class="time pull-right"> SPONTANNE </span></span>
                                       
                                        <span class="time pull-left"><a href="#"> <strong>Voir son CV</strong></a> </span>
                                         <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><br>
                                         
                                         <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a></div>
                                </div><hr>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- ************************* -->
                  
                  
            </div>
            @stop