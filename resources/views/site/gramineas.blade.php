@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-produtos wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Gramíneas</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.produtos')}}">Produtos</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.sementes')}}">Sementes</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Gramíneas</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Partners ======= -->
    <div class="container py-5-5" data-aos="zoom-out">
        <div class="section-header">
            <h1>Nossos Parceiros</h1>
        </div>

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                @foreach ($parceiros as $parceiro)
                <div class="swiper-slide"><a href="{{$parceiro->pa_link}}"><img src="{{asset('assets/img/parceiros/' . $parceiro->pa_logo)}}" class="img-fluid" alt=""></a></div>
            @endforeach
            </div>
        </div>

    </div>
    <!-- End Partners -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!--<h1 class="mb-5">Nossos produtos para uma vida saudável</h1>-->
            </div>
            <!--<div class="text-start wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Grãos</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">Forrageiras e Adubação Verde</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">Hortaliças</a>
                    </li>
                </ul>
            </div>-->
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-BRS-PAIAGUAS.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">BRS Paiaguás</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Brizantha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-BRS-PIATA.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">BRS Piatã</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Brizantha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-cv-marandu.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Marandú</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Brizantha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-Xaraes-MG-5.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Xaraés MG-5</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Brizantha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-cv-basilisk.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">CV Basilisk</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Decumbens</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-brs-ipypora.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">BRS Ipyporã</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Híbrida</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-cv-ruziziensis.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Ruziziensis</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Ruziziensis</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-cv-humidicola.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Humidícola</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Humidícola</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brachiaria-cv-llanero.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv LLANERO</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brachiaria Humidícola</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-brs-quenia.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">BRS Quênia</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-brs-tamania.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">BRS Tamania</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-brs-zuri.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">BRS Zuri</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-cv-aruana.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Aruana</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-cv-massai.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Massai</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-cv-tanzania.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Tanzânia</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-cv-mombaca.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Mombaça</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/panicum-cv-miyagui.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">cv Miyagui</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Panicum Maximum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/aveia-preta.png')}}" alt="">
                                    <div class="product-overlay"></div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Aveia Preta</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/plantacao-milheto.png')}}" alt="">
                                    <div class="product-overlay"></div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Milheto</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

@endsection
