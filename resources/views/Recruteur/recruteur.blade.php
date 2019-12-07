
@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
           
        <div class="container-fluid">
                <div class="row bg-title">
                
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title">Profil recruteur</h2> 
                        </div>
                        
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<button target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light"><a href="{{url('RECmod')}}">Modifier information</a>
                       
                    </div>
                    </div>
                
                      <div class="popup" id="popup">
                      <div class="form-group">
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Le Nom de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">ATLM</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black"> Logo l' Enreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label>ATLM</label>
                                    </div>
                                    </div><br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Email de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">www.ATLM_entreprise@yahoo.fr</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Site de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">https://www.ATLM_entreprise.dz</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">l'Adresse de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">Rue de wajda 06 Tlemcen Algérie</label>
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Numéro de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">043069875</label>
                                    
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Type de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="example-text-input" class="col-2 col-form-label">Prive</label>
                                    
                                    </div>
                                    </div>
                      </div>
                      </div>
                      
            </div>

            @stop
            