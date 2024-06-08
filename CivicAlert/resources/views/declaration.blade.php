@extends('layouts.app')
@section('content')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Solutions Urbaines</h5>
            <h1 class="display-5 mb-0">Des Solutions Innovantes pour un Avenir Urbain Durable</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="bi bi-lightbulb d-block display-1 fw-normal text-secondary mb-3"></i>
                        <h3 class="mb-3"> des pannes d'éclairage</h3>
                        <p>Les pannes d'éclairage public peuvent rendre les rues moins sûres la nuit et accroître le risque d'accidents. En signalant ces pannes, vous aidez les services municipaux à rétablir rapidement un éclairage adéquat, améliorant ainsi la sécurité</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="bi bi-trash d-block display-1 fw-normal text-secondary mb-3"></i>
                        <h3 class="mb-3">déchets non ramassés</h3>
                        <p>Les déchets non ramassés peuvent nuire à l'esthétique de la ville et poser des risques pour la santé publique. Signalez les problèmes de collecte des déchets pour aider à maintenir un environnement propre et sain.</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="bi bi-exclamation-diamond d-block display-1 fw-normal text-secondary mb-3"></i>
                        <h3 class="mb-3">les nids-de-poule sur les routes</h3>
                        <p>Les nids-de-poule peuvent endommager les véhicules et représenter un danger pour les piétons et les cyclistes. Signalez-les pour aider à maintenir nos routes en bon état et assurer la sécurité de tous. </p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>

@endsection