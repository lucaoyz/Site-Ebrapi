@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-produtos wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Linha Orgânica</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.produtos')}}">Produtos</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Linha Orgãnica</li>
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
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($produtos as $produto)
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="/assets/img/fotosProdutos/{{$produto->pro_foto}}" alt="">
                                    <div class="product-overlay">
                                        <img src="{{asset('assets/img/parceiros/' . $produto->pa_logo)}}" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5" data-bs-toggle="modal" data-bs-target="#infoProduto{{$produto->id}}">{{$produto->pro_nome}}</a>
                                    <span class="text-primary me-1" style="font-size: 17px;">{{$produto->pro_subtitulo}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    @include('site.modals.modalsProduto')


@endsection
