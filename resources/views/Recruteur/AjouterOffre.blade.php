@extends('layouts.masterRec')
@section('contenu')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Ajouter Offre</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"><!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
                       
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                      <div class="col-md-12">                        
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <div class="col-md-6"><input type="text" placeholder="intitulé" class="form-control form-control-line"> 
                                     </div>
                                     <div class="col-md-6">
                                        <input type="text" placeholder="Domaine" class="form-control form-control-line"> 
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Diplôme" class="form-control form-control-line"> </div>
                                        <div class="col-md-6">
                                        <input type="text" placeholder="Nombre année d'expérienc" class="form-control form-control-line"> 
                                        </div>
                                     
                                </div>

                                <div class="form-group">
                                    
                                    <div class="col-md-12">
                                         <div class="col-md-6">
                                            <input type="text" placeholder="lieu de travail" class="form-control form-control-line"> 
                                        </div>
                                         <div class="col-md-6">
                                            <input type="text" placeholder="compétences" class="form-control form-control-line"> 
                                        </div>
                                     
                                         </div>
                                </div>
                                <div class="form-group">
                                   
                                    <div class="col-md-12">
                                         <div class="col-md-6">
                                            <input type="text" placeholder="rémunération" class="form-control form-control-line"> 
                                        </div>
                                         <div class="col-md-6">
                                            <input type="text" placeholder="date de dépôt d'offre" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                         <div class="col-md-6">
                                            <input type="text" placeholder="date de début prévu" class="form-control form-control-line"> 
                                        </div>
                                         <div class="col-md-6">
                                            <input type="text" placeholder="durée CDD/Stage" class="form-control form-control-line"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-sm-12">
                                         <div class="col-md-6">
                                            <select class="form-control form-control-line">
                                            <option>Stage</option>
                                            <option>CDI</option>
                                            <option>CDD</option>
                                            
                                        </select>
                                        </div>
                                         <div class="col-md-6">
                                        </div>
                                      </div> 
                                    </div>
                                       <div class="form-group">
                                    
                                    <div class="col-sm-12">
                                         <div class="col-md-6">
                                       <label><b>Description:</b></label>
                                        <br/>
                                         <textarea name="description" rows="10" cols="60">
                                                Description...
                                          </textarea>
                                        </div>
                                         <div class="col-md-6">
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