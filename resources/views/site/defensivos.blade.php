@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-produtos wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Defensivos Agrícolas</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.produtos')}}">Produtos</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Defensivos Agrícolas</li>
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
                <div class="swiper-slide"><a href="{{$parceiro->pa_link}}" target="_blank"><img src="{{asset('assets/img/parceiros/' . $parceiro->pa_logo)}}" class="img-fluid" alt=""></a></div>
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
            <div class="text-start wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Inseticidas</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">Herbicidas</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">Fungicidas</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-4">Acaricidas</a>
                    </li>

                </ul>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($Inseticidas as $Inseticida)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/{{$Inseticida->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <a href="{{$Inseticida->pa_link}}" target="_blank"><img src="{{asset('assets/img/parceiros/' . $Inseticida->pa_logo)}}" class="img-fluid" alt=""></a>                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" data-bs-toggle="modal" data-bs-target="#infoProduto{{$Inseticida->id}}">{{$Inseticida->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$Inseticida->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($Herbicidas as $Herbicida)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/{{$Herbicida->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <a href="{{$Herbicida->pa_link}}" target="_blank"><img src="{{asset('assets/img/parceiros/' . $Herbicida->pa_logo)}}" class="img-fluid" alt=""></a>                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" data-bs-toggle="modal" data-bs-target="#infoProduto{{$Herbicida->id}}">{{$Herbicida->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$Herbicida->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($Fungicidas as $Fungicida)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/{{$Fungicida->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <a href="{{$Fungicida->pa_link}}" target="_blank"><img src="{{asset('assets/img/parceiros/' . $Fungicida->pa_logo)}}" class="img-fluid" alt=""></a>                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" data-bs-toggle="modal" data-bs-target="#infoProduto{{$Fungicida->id}}">{{$Fungicida->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$Fungicida->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($Acaricidas as $Acaricida)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/{{$Acaricida->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <a href="{{$Acaricida->pa_link}}" target="_blank"><img src="{{asset('assets/img/parceiros/' . $Acaricida->pa_logo)}}" class="img-fluid" alt=""></a>                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" data-bs-toggle="modal" data-bs-target="#infoProduto{{$Acaricida->id}}">{{$Acaricida->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$Acaricida->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    @include('site.modals.modalsDefensivos')


@endsection
