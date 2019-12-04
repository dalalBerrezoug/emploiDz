@extends('layouts.master')
@section('content')

<section id="portfolio"  class="section-bg" style="margin-top: 50px;" >
        <div class="container">
  
          <header class="section-header">
            <h3 class="section-title">Modéles CV</h3>
          </header>
  
          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Tous</li>
                <li data-filter=".filter-app">Classique</li>
                <li data-filter=".filter-card">Original</li>
                <li data-filter=".filter-web">Débutant/Expérimenté</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/classique1.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/classique1.PNG" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.creeruncv.com/exemple-de-cv/cv-01-grille/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele classique 1</a></h4>
                  <p>Classique</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/deb1.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/deb1.png" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.emploitic.com/conseils/modeles-de-cv/modeles-de-cv-en-francais/cv-classiques-debutant-junior" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele Débutant</a></h4>
                  <p>DEBUTANT/EXPERIMENTE</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/classique2.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/classique2.PNG" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.creeruncv.com/exemple-de-cv/cv-178-classique-et-elegant/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele classique</a></h4>
                  <p>CLASSIQUE</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/ori1.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/ori1.PNG" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.creeruncv.com/exemple-de-cv/cv-241-new-york/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele Original 1</a></h4>
                  <p>ORIGINAL</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/deb2.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/deb2.PNG" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.emploitic.com/conseils/modeles-de-cv/modeles-de-cv-en-francais/cv-original-debutant-junior" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">modele Debutant</a></h4>
                  <p>DEBUTANT/EXPERIMENTE</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/classique3.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/classique3.PNG" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.creeruncv.com/exemple-de-cv/cv-201-sobre-et-classique/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele classique 3</a></h4>
                  <p>CLASSIQUE</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/ori2.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/ori2.PNG" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.creeruncv.com/exemple-de-cv/cv-109-innovant/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele Original 2</a></h4>
                  <p>ORIGINAL</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/ori3.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/ori3.PNG" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.creeruncv.com/exemple-de-cv/cv-188-vide/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele Original 3</a></h4>
                  <p>ORIGINAL</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="bizPage/img/portfolio/deb3.PNG" class="img-fluid" alt="">
                  <a href="bizPage/img/portfolio/deb3.PNG" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.emploitic.com/conseils/modeles-de-cv/modeles-de-cv-en-francais/cv-original-debutant-junior" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">Modele Expérimenté</a></h4>
                  <p>DEBUTANT/EXPERIMENTE</p>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #portfolio -->
      @endsection
