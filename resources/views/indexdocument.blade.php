@extends("layouts.master")
@section('content')
<br><br><br><br><br><br>
<div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >   Documents</span></h4><a href="{{url('indexdocument/createdocument')}}"><span class="oi oi-plus plusdoc" id="plusdoc" style="margin-left: 500px;margin-top: 20px;"></span></a></div>
                  <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                  
                        <div class="row" style="margin-top: 50px; margin-left:30px ;">
                            
                            <div style="margin-left: 10px;">
                                <span class="oi oi-file"> Titre de document</span> <span class="oi oi-pencil editdoc" id="editdoc" style="margin-left: 500px;"></span><br><br>
                                  
                            </div>
                            <br><br>
                        </div><br><br><br><br><br><br>
                 
          
          
                   </div>
                   @endsection