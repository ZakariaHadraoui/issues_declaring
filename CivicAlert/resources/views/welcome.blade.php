@extends('layouts.app')
@section('content')

 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
           
          </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/casa.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase animated bounceInDown">Réparez Votre Ville</h5>
                        <h3 class="display-1 text-white mb-md-4 animated zoomIn">Ensemble pour une Ville Meilleure !</h3>
                        @if(Auth::check())
                        <a href="{{ route('profil', ['id' => Auth::user()->id]) }}" class="btn btn-success py-md-3 px-md-5 me-3 ">Déclarer</a>
                        @endif
                        
                                            <a href="" class="btn btn-danger py-md-3 px-md-5 ">Contacter nous</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/embout.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase animated bounceInDown">Détecter, Signaler, Résoudre</h5>
                        <h3 class="display-1 text-white mb-md-4 animated zoomIn">Améliorez Votre Quartier !</h3>
                        <a href="/createReport" class="btn btn-success py-md-3 px-md-5 me-3 ">Déclarer</a>
                        <a href="" class="btn btn-danger py-md-3 px-md-5 ">Contacter nous</a>
                    </div>
                </div>
            </div>
           
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        
    </div>
</div>
 <!-- About Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/safety.webp" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h5>
                    <h1 class="display-5 mb-0">Une Ville Plus Belle Commence par Vous : Découvrez Notre Plateforme de Signalement Urbain!</h1>
                </div>
                
                
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3" style="height: 200px;">
                            <i class="fa fa-star fa-4x text-white mb-4"></i>
                            <h4 class="text-white mb-0">15 Years Experience</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                        <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                            <i class="fa fa-award fa-4x text-white mb-4"></i>
                            <h4 class="text-white mb-0">Award Winning</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h5>
            <h1 class="display-5 mb-0">Our Excellent CCTV Security Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="flaticon-cctv d-block display-1 fw-normal text-secondary mb-3"></i>
                        <h3 class="mb-3"> des pannes d'éclairage</h3>
                        <p>Les pannes d'éclairage public peuvent rendre les rues moins sûres la nuit et accroître le risque d'accidents. En signalant ces pannes, vous aidez les services municipaux à rétablir rapidement un éclairage adéquat, améliorant ainsi la sécurité</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"></i>
                        <h3 class="mb-3">déchets non ramassés</h3>
                        <p>Les déchets non ramassés peuvent nuire à l'esthétique de la ville et poser des risques pour la santé publique. Signalez les problèmes de collecte des déchets pour aider à maintenir un environnement propre et sain.</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="flaticon-double d-block display-1 fw-normal text-secondary mb-3"></i>
                        <h3 class="mb-3">les nids-de-poule sur les routes</h3>
                        <p>Les nids-de-poule peuvent endommager les véhicules et représenter un danger pour les piétons et les cyclistes. Signalez-les pour aider à maintenir nos routes en bon état et assurer la sécurité de tous. </p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Page Heading -->
    
@endsection