@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tableau de bord</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                   
                <div class="row">
                    <!--col -->
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div id="ca_graph" ></div>
                                
                                                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                        <div id="a">
                        
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    
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
                    <div id="line">
                   
                    </div>
                        </div>
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
                                        
                                        <span class="time pull-left"><a href="{{url('voir_cv/'.$postule->condidat_id)}}"> <strong>Voir son CV</strong></a> </span>
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
                                       
                                        <span class="time pull-left"><a href="{{url('voir_cv/'.$postule->condidat_id)}}"> <strong>Voir son CV</strong></a> </span>
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
            </div>
            @stop