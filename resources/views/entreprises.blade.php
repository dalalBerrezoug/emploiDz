@extends("layouts.master")
@section('content')

<div class="container" style="margin-top: 100px;">

<div class="row" >

  <div class="col-lg-3">


    <div >
      <img src="bizPage/img/ideo.jpg" style="margin-top: 50px;">
    </div>

  </div>

  <div class="col-lg-9">




        <div class="row">



                @foreach($recruteurs as $recruteurs)
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100" style="width=50px; height=30px;">
                    <a href="#"><img class="card-img-top" src="/uploads/avatars/{{$recruteurs->logo_avt}}" alt="" style="width=50px; height=30px;"/></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="{{url('offres/'.$recruteurs->id)}}">{{$recruteurs->Nom_Rec}}</a>
                      </h4>

                      <p class="card-text">{{$recruteurs->type}} {{$recruteurs->Adresse}}</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
                @endforeach






              </div>
              <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

          </div>
          <!-- /.row -->

        </div>








@endsection