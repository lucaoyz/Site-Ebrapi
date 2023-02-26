@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Histórico</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Histórico</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header">
                <h1>Explore o nosso Histórico</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-5.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-1.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-2.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-6.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-7.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-7.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-3.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-4.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-8.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-8.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

@endsection
