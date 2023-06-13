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
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($forrageiras as $forrageira)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/principal/{{$forrageira->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <a href="{{$forrageira->pa_link}}"><img src="{{asset('assets/img/parceiros/' . $forrageira->pa_logo)}}" class="img-fluid" alt=""></a>                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">{{$forrageira->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$forrageira->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($Hortalicas as $Hortalica)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/principal/{{$Hortalica->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <a href="{{$Hortalica->pa_link}}"><img src="{{asset('assets/img/parceiros/' . $Hortalica->pa_logo)}}" class="img-fluid" alt=""></a>                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5">{{$Hortalica->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$Hortalica->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
