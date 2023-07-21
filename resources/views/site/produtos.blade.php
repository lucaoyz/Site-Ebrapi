@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-produtos wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Produtos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Produtos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Partners ======= -->
    <div class="container py-5-5" data-aos="zoom-out">
        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                @foreach ($parceiros as $parceiro)
            <div class="swiper-slide"><a href="{{$parceiro->pa_link}}" target="_blank"><img src="assets/img/parceiros/{{$parceiro->pa_logo}}" class="img-fluid" alt=""></a></div>
            @endforeach
            </div>
        </div>

    </div>
    <!-- End Partners -->


    <!-- Product Start -->
    <div class="container-xxl py-5-5">
        <div class="container">
            <div class="section-header">
                <h1>Produtos</h1>
            </div>
            <div class="tab-content">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.sementes')}}"><img class="img-fluid" src="{{asset('img/products/sementes.png')}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.sementes')}}">Sementes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.fertilizantes')}}"><img class="img-fluid" src="{{asset('img/products/fertilizante.png')}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.fertilizantes')}}">Fertilizantes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.defensivos')}}"><img class="img-fluid" src="{{asset('img/products/defensivo.png')}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.defensivos')}}">Defensivos Agrícolas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.biologicos')}}"><img class="img-fluid" src="{{asset('img/products/biologicos.png')}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.biologicos')}}">Biológicos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.linhaorganica')}}"><img class="img-fluid" src="{{asset('img/products/linha-organica.png')}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.linhaorganica')}}">Linha Orgânica</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

@endsection
