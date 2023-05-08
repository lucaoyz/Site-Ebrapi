@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-produtos wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Milho</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Produtos</li>
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.sementes')}}">Sementes</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Milho</li>
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
                                    <img class="img-fluid" src="{{asset('img/products/sementes/al-bandeirante.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-cati.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a href="{{asset('img/products/sementes/al-bandeirante.png')}}" class="d-block h5" data-lightbox="gallery">Al Bandeirante</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Milho Variedade</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/al-avare.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-cati.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a href="{{asset('img/products/sementes/al-avare.png')}}" class="d-block h5" data-lightbox="milho">Al Avaré</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Milho Variedade</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/cativerde.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-cati.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">Cativerde</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Milho Variedade</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/br106.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 220px;" src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">BR 106</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Milho Variedade</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/xb8018.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-semeali.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a href="{{asset('img/products/sementes/xb8018.png')}}" class="d-block h5" data-lightbox="xb8018"
                                    data-title="
                                    Perfil

                                    Híbrido de visual moderno, com arquitetura foliar semi-ereta, alto potencial produtivo e ótimas respostas ao uso da tecnologia.

                                    Indicado para grãos em áreas de média / alta fertilidade no solo.

                                    População recomendada para plantios de verão entre 55 – 60 mil / ha e para plantios de safrinha entre 50 – 45 mil plantas  / ha.

                                    Híbrido Precoce com excelente sanidade foliar.

                                    Pontos Fortes

                                    Sabugo Fino e Grãos profundos.

                                    Híbrido rústico com excelente responsividade ao uso de maiores adubações.

                                    Excelente sanidade foliar para as principais doenças.

                                    Excelente empalhamento na espiga diminuindo a incidência de grãos ardidos.">
                                    XB 8018</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Híbridos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/xb6055pro2.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-semeali.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">XB 6055 Pro2</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Híbridos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/sx8555vip3.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-semeali.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">SX 8555 Vip3</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Híbridos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('img/products/sementes/xb6016vip3.png')}}" alt="">
                                    <div class="product-overlay">
                                        <img class="img-fluid" style="width: 200px;" src="{{asset('img/partners/logo-semeali.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">XB 6016 Vip3</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">Híbridos</span>
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