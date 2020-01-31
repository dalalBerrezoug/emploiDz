
@extends("layouts.master")
@section('content')

<div class="overlayeditexp" id="overlayeditexp">
                              <div class="popupeditexp" id="popupeditexp">
                                <h2>Editer ma competence <a href="{{url('Cv_Condidat')}}"><span id="closeeditexp" class="closeeditexp"> &times; </span></a></h2><hr>
                                <form action= "{{url('Updaye/'.$comp->id)}}" method="get">
    <input type="hidden" name="_method" value="POST">
    {{csrf_field()}}
                                        
                           <div class="form-group row">
                              <label for="example-text-input" class="col-2 col-form-label">competence</label>
                              <div class="col-8">
                                <input class="form-control" type="text" value="{{$comp->competence}}" id="example-text-input" name="competence">
                              </div>
                              <div class="col-2">
                              <input type="submit" name = "" value="Modifier" class="btn btn-success btn-lg mb-2">
                            </div>
                            </div>

                           
                                    </form>
          
                                
                  
                              </div> 
                              </div><br<br><br><br><br><br> <br<br><br><br><br><br>  <br<br><br><br><br><br><br<br><br><br><br><br>
                              @endsection
                              <!--"{{url('indexcompetence/'.$comp->id.'/comp')}}"-->