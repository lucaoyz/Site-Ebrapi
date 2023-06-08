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
            <div class="section-header">
                <h1>Produtos</h1>
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
                        @foreach ($graos as $grao)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/principal/{{$grao->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <a href="{{$grao->pa_link}}"><img src="{{asset('assets/img/parceiros/' . $grao->pa_logo)}}" class="img-fluid" alt=""></a>                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">{{$grao->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$grao->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                <div id="tab-2" class="tab-pane fade show p-0">
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
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/crotalaria.png')}}" alt="">
                                    <div class="product-overlay"></div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Crotalárias</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/feijao-de-porco.png')}}" alt="">
                                    <div class="product-overlay"></div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Feijão de Porco</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/guandu.png')}}" alt="">
                                    <div class="product-overlay"></div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Guandu</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Descrição</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/mucuna.png')}}" alt="">
                                    <div class="product-overlay"></div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Mucuna</a>
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
                                    <img class="img-fluid" src="{{asset('img/products/sementes/abobora-hiroko.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Hiroko</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora Tetsukabuto</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/abobora-rajada-seca.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Rajada Seca</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora Seca/Pescoço</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/abobora-xingo.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Xingó</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/abobrinha-caserta.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Caserta Italiana</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/menina-brasileira-precoce.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Menina Brasileira Precoce</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha Menina Brasileira</span>
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
                                    <img class="img-fluid" src="{{asset('img/products/sementes/berinjela-classic.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Classic</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Berinjela</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/berinjela-marjorie.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Marjorie</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Berinjela</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/beterraba-katrina.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Katrina</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Beterraba</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/brocolis-coliseu.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Coliseu</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Brócolis Verão</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/cebola-baia-herval.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Baia Herval</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Cebola Amarela</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/cenoura-brasilia-irece.jpg')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Brasília Irecê</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Cenoura Verão</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/cenoura-nantes-milena.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Nantes Milena</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Cenoura Outono/Inverno</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/couve-manteiga.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Manteiga</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Couve-Folha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/chicoria-encantada.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Encantada</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Chicória Lisa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/jilo-comprido-grande-rio.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Comprido Grande Rio</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Jiló Comprido</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/abobora-isabella.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Mini Paulista Isabella</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mini Abóbora Butternut Tropical</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/melancia-crimson-select-plus.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Crimson Select Plus</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Melancia Crimson</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/melancia-crimson-sweet.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Crimson Sweet</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Melancia Crimson</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/maxixe-do-norte.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Do Norte</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Maxixe</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/mamao-formosa.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Formosa</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mamão Formosa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/mamao-ouro.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Ouro</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Mamão Solo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/pimentao-amarelo-sf.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Amarelo SF</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Pimentão Cônico</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/pimentao-casca-dura-ikeda.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Casca Dura Ikeda</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Pimentão Cônico</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/pimentao-rubi.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Rubi</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Pimentão Cônico</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/pimentao-derick.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Derick</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Pimentão Lamuyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/pimenta-bico-vermelho.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Bico Vermelho</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Pimenta Bico</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/pimenta-malagueta.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Malagueta</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Pimenta Malagueta</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/pepino-esmeralda.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Esmeralda Caipira</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Pepino Caipira Verde Claro</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/quiabo-santa-cruz.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Santa Cruz47</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Quiabo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/rucula-apreciatta.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Apreciatta</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Rúcula Folha Larga</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/rabanete-vip-crimson.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Vip Crimson</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Rabanete Redondo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/salsa-lisa.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Lisa</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Salsa Lisa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/tomate-barto.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Bartô</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Tomate Determinado Saladete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/tomate-fascinio.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Fascínio</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Tomate Determinado Saladete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/tomate-cascade.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Cascade</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Tomate Indeterminado Cereja</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/tomate-santa-cruz-kada.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" src="{{asset('img/partners/logo-feltrin-white.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Santa Cruz Kada</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Tomate Indeterminado Santa Cruz</span>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">B8A</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora Tetsukabuto</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Landa</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora Seca/Pescoço</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Marieta</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Estér</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Goianinha</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Maranhão</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Guarujá</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora Butternut Tropical</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Maitê</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abóbora Butternut Tropical</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Antonella</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Emanuela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Hilary</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Jaqueline</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Tronco Redonda</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Cigana</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha Menina Brasileira</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Morgana</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Abobrinha Menina Brasileira</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Branca de Lyon</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Acelga</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Mérida</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Acelga</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Galileu</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Agrião D'água</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Topázio</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Agrião D'água</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Tall Utah</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Aipo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Verde</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alcachofra</span>
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
                                    <a class="d-block h5">Megan</a>
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
                                    <a class="d-block h5">Tarsila</a>
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
                                <div class="text-center p-4">
                                    <a class="d-block h5">Ariana</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Cinderela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Filó</a>
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
                                <div class="text-center p-4">
                                    <a class="d-block h5">Soraia</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Verde</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Gabriela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Roxa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Natasha</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Crespa Roxa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Agnes</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Friseé Crocante</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Brunela</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Friseé Crocante</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Regina</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Lisa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Stella</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Lisa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Ceci</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Mimosa Roxa</span>
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
                                    <a class="d-block h5">Crespa</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Biofortificada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Lisa</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Alface Biofortificada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="text-center p-4">
                                    <a class="d-block h5">Lisa Roxa</a>
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
                        </div>-->
                    </div>
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                                <h1 class="mb-5">Mais hortaliças sob consulta</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->



@endsection
