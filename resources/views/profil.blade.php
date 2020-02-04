@extends("layouts.master")
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('bizPage/css/styleprofil.css')}}">
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img src="/uploads/avatars/{{$cond->avatar}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                            <form enctype="multipart/form-data" action="{{url('updateProfilecondidat')}}" method="POST">
                               <input type="file" id="file" accept="image/*" name="avatar">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label for="file">changer photo</label>
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>{{ $cond->nom }} {{ $cond->prenom }} 
                                    
</h5>
                                   <!-- <h6>
                                        Web Developer and Designer 
                                    </h6>-->
                                   <br><br><br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Coordonnées</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    
                        <button class="profile-edit-btn" name="btnAddMore"><a href="{{url('UpdateCondidat')}}"> Editer Mon Profil</a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p></p>
                            <a href="{{url('Cv_Condidat')}}">Mon CV</a><br/>
                            
                            <p>Les Offres Postulés</p>
                            @if($postule)
                            @foreach($postule as $postule)

                                @if($postule->condidat_id == Auth::user()->id and $postule->typepostule == 0 )

                            <a href="{{url('detail/'.$postule->offre_id)}}"> {{$postule->titre}} {{$postule->intitule}}</a><br/>
                            @endif
                            @endforeach
                            @endif


                            <p>Les Condidatures spontannés</p>
                            @foreach($postule1 as $postule1)

                                @if($postule1->condidat_id == Auth::user()->id and $postule1->typepostule == 1 )

                            <a href=""> {{$postule1->Nom_Rec}}-{{$postule1->Adresse}}</a><br/>
                            @endif
                            @endforeach
                        
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Civilité</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $cond->civilite }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $cond->nom }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Prenom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $cond->prenom}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date de naissance</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $cond->datenais }}</p>
                                               
                                            </div>
                                        </div>
                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adresse</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $cond->adresse }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$cond->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Téléphone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $cond->telephone }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Lien Linkdin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $cond->linkdin }}</p>
                                            </div>
                                        </div>
                                        
                                
                            </div>




                            
                        </div>
                    </div>
                </div>          
        </div>