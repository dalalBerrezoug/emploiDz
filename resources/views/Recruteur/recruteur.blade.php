
@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profil recruteur</h4> 
                        </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Modifier information</a>
                        <ol class="breadcrumb">
                            <!--<li><a href="index.html">Tableau de bord</a></li>-->
                            <!--<li class="active"></li>-->
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                   
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Nom de recruteur</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Adress</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Logo</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Numéro de téléphone</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Site de recruteur</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Type</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>société</option>
                                            <option>public</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Valider les information</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            @stop
            