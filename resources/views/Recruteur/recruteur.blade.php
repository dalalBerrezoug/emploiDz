
@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
           
        <div class="container-fluid">
                <div class="row bg-title">
                
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title">Profil Recruteur</h2> 
                        </div>
                        
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<button target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light"><a href="{{url('$Recmod')}}">Modifier information</a>
                       
                    </div>
                    </div>
                
                      <div class="popup" id="popup">
                      <div class="form-group">
                      <input type="hidden" name="_method" value="get">
                                              {{csrf_field()}}
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Le Nom de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">{{$Rec->Nom_Rec}}</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black"> Logo l' Enreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label>{{$Rec->Logo}}</label>
                                    </div>
                                    </div><br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Email de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">{{$Rec->Email}}</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Site de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">{{$Rec->Site_web}}</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">l'Adresse de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">{{$Rec->Adresse}}</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Numéro de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">{{$Rec->Telephone}}</label>
                                    
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Type de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">{{$Rec->type}}</label>
                                    
                                    </div>
                                    </div>
                      </div>
                      </div>
                      
            </div>

            @stop
            