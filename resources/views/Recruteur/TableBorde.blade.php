@extends('layouts.masterRec')
@section('contenu')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tableau de bord</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                    <form action="{{url('statique')}}">
                       <select name="anne_stat" target="_blank" class="pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">
                       <?php
                       use Illuminate\Support\Facades\DB;
                       use App\Offre;
                       $anne = DB::table('offres')->select(DB::raw('distinct YEAR(created_at) as anne'))
                         ->get();
                         foreach ($anne as $a) {
                         ?>
                         <option><?php echo $a->anne;?></option>
                            <?php } ?>
                       </select>
                       <button target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light" type="submit">Appliquer</button>
                       <form>
                                            <ol class="breadcrumb">
                           <!-- <li><a href="#">Tableau de bord</a></li>-->
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div id="ca_graph" ></div>
                                <?= Lava::render('ColumnChart','Finances','ca_graph') ?>
                               
                                                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                        <div id="a">
                        <?= Lava::render('DonutChart','IMDB','a') ?>
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
                    <?= Lava::render('LineChart','LINE','line') ?>
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
                            <h3 class="box-title">Spontanée</h3>
                            <div class="comment-center">
                                <div class="comment-body">
                                    <div class="user-img"> <img src="{{asset('pixel/plugins/images/users/pawandeep.jpg')}}" alt="user" class="img-circle"></div>
                                    <div class="mail-contnet">
                                        <h5>Belhadj nadir</h5> <span class="mail-desc">hahahahahahaha.ghahhajajjaaii ahuiuiiiiiiiiiiiiiii</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                                </div>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="{{asset('pixel/plugins/images/users/sonu.jpg')}}" alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>Somia bouad</h5> <span class="mail-desc">jfhjfghvhfubvhiuhu bvbbbbbbbriuurtzooppjzopzjpzijgijziogzhiozhgihgiozhg</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                                </div>
                                <div class="comment-body b-none">
                                    <div class="user-img"> <img src="{{asset('pixel/plugins/images/users/arijit.jpg')}}" alt="user" class="img-circle"> </div>
                                    <div class="mail-contnet">
                                        <h5>khadidja dari</h5> <span class="mail-desc">hahahahaha hhohohooh llllll êêfgorghhouhornbjkfbhbuhbti </span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
            </div>
            @stop