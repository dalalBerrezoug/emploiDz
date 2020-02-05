@extends('layouts.masterRec')
@section('contenu')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Modifier Offre</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"><!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
                       
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                      <div class="col-md-12">                        
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="{{url('Offre/'.$offre->id.'/update/'.Auth::user()->id)}}">
                             {{csrf_field()}}

                             <div class="form-group">
                                    <div class="col-md-6">
                                    <label>Intitulé</label>
                                    <input type="text" value="{{$offre->nom}}" class="form-control form-control-line" name="nom"> 
                                     </div>
                                     <div class="col-md-6">
                                     <label>Domaine</label>
                                        <input type="text" value="{{$offre->domaine}}" class="form-control form-control-line" name="domaine"> 
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                    <label>Diplôme</label>
                                        <input type="text" value="{{$offre->diplome}}" class="form-control form-control-line" name="diplome"> </div>
                                        <div class="form-group">
                                    <div class="col-md-6">
                                    <label>Nombre d'année d'experience</label>
                                    <input type="text" value="{{$offre->intitule}}" class="form-control form-control-line" name="intitule"> 
                                     </div>
                                     
                                </div>

                                <div class="form-group">
                                    
                                    <div class="col-md-12">
                                         <div class="col-md-6">
                                         <label>lieu de travail</label>
                                            <input type="text" value="{{$offre->lieuTrav}}" class="form-control form-control-line" name="lieu"> 
                                        </div>
                                         <div class="col-md-6">
                                         <label>Compétences</label>
                                            <input type="text" value="{{$offre->competences}}" class="form-control form-control-line" name="comp"> 
                                        </div>
                                     
                                         </div>
                                </div>
                                <div class="form-group">
                                   
                                    <div class="col-md-12">
                                    <label></label>
                                         <div class="col-md-6">
                                         <label>Rémunération</label>
                                            <input type="text" value="{{$offre->duree}}" class="form-control form-control-line" name="remun"> 
                                        </div>
                                         <div class="col-md-6">
                                         <label>Date de Dépôt d'Offre</label>
                                            <input type="date" value="{{$offre->depot_offre}}" class="form-control form-control-line" name="depot_offre">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                         <div class="col-md-6">
                                         <label>Date de Début Prévu</label>
                                            <input type="date" value="{{$offre->debut_prevu}}" class="form-control form-control-line" name="debut_prevu"> 
                                        </div>
                                         <div class="col-md-6">
                                         <label>Durée CDD/Stage</label>
                                            <input type="text" value="{{$offre->duree}}" class="form-control form-control-line" name="duree"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-sm-12">
                                         <div class="col-md-6">
                                         <label>Type</label>
                                            <select class="form-control form-control-line" name="type">
                                            <option>Stage</option>
                                            <option>CDI</option>
                                            <option>CDD</option>
                                            
                                        </select>
                                        </div>
                                         <div class="col-md-6">
                                         <label>Statu</label>
                                         <br>
                                         @if($offre->statu==1)
                                         <label>Publie</label>
                                        
                                         <input type="radio" name="statu" value="1" checked>
                                        
                                         <label>Retirer</label>
                                         <input type="radio" name="statu" value="0">
                                         @else 
                                         <label>Publie</label>
                                        
                                         <input type="radio" name="statu" value="1" >
                                        
                                         <label>Retirer</label>
                                         <input type="radio" name="statu" value="0" checked> @endif
                                        </div>
                                      </div> 
                                    </div>
                                       <div class="form-group">
                                    
                                    <div class="col-sm-12">
                                         <div class="col-md-6">
                                       <label><b>Description:</b></label>
                                        <br/>
                                         <textarea name="description" rows="10" cols="60"  name="description" value="{{$offre->description}}">
                                         {{$offre->description}} 
                                          </textarea>
                                        </div>
                                         <div class="col-md-6">
                                        
                                        </div>
                                       <div class="col-md-8">
                                       <input type="submit" class="btn btn-success" value="Modifier">
                                       </div>
                                    </div>
                            </form>
                                  
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
             </div>
             @stop