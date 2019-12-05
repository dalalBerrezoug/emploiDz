@extends('Accuiel')
@section('content')
<div class="container" style="margin-top: 100px;">

<div class="row" >

  <div class="col-lg-3">

    
    <div >
      <img src="bizPage/img/ideo.jpg" style="margin-top: 50px;">
    </div>

  </div>

  <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


        <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="bizPage/img/webinar1.jpg" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">Lire l'article</a>
                      </h4>
                      
                      <p class="card-text">Tutoriels, Wewibars et Mooc: alternatives pour renforcer votre employabilité</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="bizPage/img/ar2.jpg" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">Lire l'article</a>
                      </h4>
                      
                      <p class="card-text">Bienveillance au travail : vous avez tout à gagner !</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="bizPage/img/ar3.jpg" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">Lire l'article</a>
                      </h4>
                      
                      <p class="card-text">Entretien d’embauche : les 3 échecs dont il faut parler</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="bizPage/img/ar4.jpg" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">Lire l'article</a>
                      </h4>
                      
                      <p class="card-text">Comment Passer le Barrage des Logiciels de Recrutement ?</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="bizPage/img/ar5.jpg" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">Lire l'article</a>
                      </h4>
                      
                      <p class="card-text">Distraction au travail, comment rester concentré pour être plus productif ?</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="bizPage/img/ar6.png" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">Lire l'article</a>
                      </h4>
                      
                      <p class="card-text">5 conseils pour s’intégrer dans une nouvelle équipe</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
      
              </div>
              <!-- /.row -->
      
            </div>
            <!-- /.col-lg-9 -->
      
          </div>
          <!-- /.row -->
      
        </div>
        
        @endsection