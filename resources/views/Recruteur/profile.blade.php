@extends('layouts.masterRec')
@section('photoprofile')
<ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="/uploads/avatars/{{$Rec->avatar}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"> {{$Rec->nom }} {{$Rec->prenom}}</b> </a>
                    </li>
                </ul>
                @stop
@section('contenu')

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                   <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">page de profile</h4> </div>
                        <!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Tableau de bord</a></li>
                            <li class="active">Profile page</li>
                        </ol>
 </div>-->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/couver.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="/uploads/avatars/{{$Rec->avatar}}" class="thumb-lg img-circle" alt="img"></a>
    
                               
                               </div>
                               <form enctype="multipart/form-data" action="{{url('profile_update')}}" method="POST">
                               <input type="file" id="file" accept="image/*" name="avatar">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label for="file">changer photo</label>
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    </div>
                                   
                              

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material"  method="get" action="{{url('ModifContectRec')}}">
                                <div class="form-group" class="col-md-12">
                                    <label class="col-md-6">Nom:</label>
                                    <div class="col-md-6">
                                                <p>{{$Rec->nom}}</p>
                                            </div>
                                            </div>
                                    <label for="example-email" class="col-md-6">Prenom</label>
                                    <div class="col-md-6">
                                                <p>{{$Rec->prenom}}</p>
                                            </div>
                                            <label for="example-email" class="col-md-6">Civilite</label>
                                            <div class="col-md-6">
                                                <p>{{$Rec->civilite}}</p>
                                            </div>
                                            
                                            
                                <div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                    <p>{{$Rec->email}}</p>
                                       </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Numéro de téléphone</label>
                                    <div class="col-md-12">
                                    <div class="col-md-12">
                                    <p>{{$Rec->telephone}}</p>
                                       </div> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Fonction</label>
                                    <div class="col-md-12">
                                       <p>{{$Rec->fonction}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                   <button class="btn btn-success" type="submit">Mettre à jour le profil</button>
                                   </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                @stop