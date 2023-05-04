@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-produtos wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Sementes</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.produtos')}}">Produtos</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Sementes</li>
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
            <div class="swiper-slide"><img src="{{asset('assets/img/parceiros/' . $parceiro->pa_logo)}}" class="img-fluid" alt=""></div>
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
            <div class="text-start wow slideInRight" data-wow-delay="0.1s">
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
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/arroz.png')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.arroz')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="{{route('site.arroz')}}">Arroz</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/milho.png')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.milho')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="{{route('site.milho')}}">Milho</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/feijao.png')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.feijao')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="{{route('site.feijao')}}">Feijão</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/lavoura-soja.png')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.soja')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="{{route('site.soja')}}">Soja</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/sorgo.png')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.sorgo')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="{{route('site.sorgo')}}">Sorgo</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/trigo.png')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.trigo')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="{{route('site.trigo')}}">Trigo</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/graminea.png')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.gramineas')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" href="{{route('site.gramineas')}}">Gramíneas</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/leguminosas.jpeg')}}" alt="">
                                    <div class="product-overlay">
                                        <a class="link" href="{{route('site.leguminosas')}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Leguminosas</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/expositor-feltrin.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Feltrin Sementes</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Linha Envelopes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/feltrin.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Feltrin Sementes</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Profissional</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-mauren.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Mauren</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-tarsila.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Tarsila</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Megan</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Andriely</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Grandes Lagos</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Greicy</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Icebela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Lidiane</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Rafaela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Yasmin</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Americana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-ariana.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Ariana</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-cinderela.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Cinderela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-crocantela.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Crocantela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-veneranda.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Veneranda</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Greenmary</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Loreane</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Luzia</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Mônica</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-soraia.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Soraia</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-gabriela.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Gabriela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Roxa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-natasha.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Natasha</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Roxa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-rubinela.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Rubinela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Roxa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-agnes.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Agnes</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Friseé Crocante</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-brunela.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Brunela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Friseé Crocante</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-elisabeth.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Elisabeth</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Lisa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-regina.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Regina</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Lisa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-stella.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Stella</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Lisa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-betania.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Betânia</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Mimosa Roxa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-ceci.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Ceci</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Mimosa Roxa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/alface-giovana.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Giovana</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Mimosa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Nataly</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Mimosa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Ariadne</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Romana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Bicolor</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Biofortificada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Lisa Verde</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Biofortificada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Analu</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mini Alface</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Guria</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mini Alface</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Andressa</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mini Alface</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Luiza</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mini Alface</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Purpurita</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mini Alface</span>
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
