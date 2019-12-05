
@extends("layouts.master")
@section('content')

<div class="overlayeditexp" id="overlayeditexp">
                              <div class="popupeditexp" id="popupeditexp">
                                <h2>Editer ma competence <span id="closeeditexp" class="closeeditexp"> &times; </span></h2><hr>
                                <form action= "{{url('cv/'.$comp->id)}}" method="POST">
    <input type="hidden" name="_method" value="POST">
    {{csrf_field()}}
                                        
                           <div class="form-group row">
                              <label for="example-text-input" class="col-2 col-form-label">competence</label>
                              <div class="col-8">
                                <input class="form-control" type="text" value="{{$comp->competence}}" id="example-text-input" name="competence">
                              </div>
                            </div>

                            <input type="submit" name = "" value="Modifier">
                                    </form>
          
                                
                  
                              </div> 
                              </div><br<br><br><br><br><br> <br<br><br><br><br><br>  <br<br><br><br><br><br><br<br><br><br><br><br>
                              @endsection
                              <!--"{{url('indexcompetence/'.$comp->id.'/comp')}}"-->