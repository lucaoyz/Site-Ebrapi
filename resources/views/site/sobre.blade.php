@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-sobre wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown" style="text-shadow: 0px 0px 20px #000;">Sobre Nós</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}" style="text-shadow: 0px 0px 10px #000;">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page" style="text-shadow: 0px 0px 10px #000;">Sobre</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5-5 alt-services">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <h5 class="mb-3">Linha do Tempo:</h5>
                            <img class="img-fluid" src="{{asset('img/about/Ebrapi-Laudisse.png')}}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <h5 class="mb-3" style="color: #fff; visibility: hidden;">teste</h5>
                            <img class="img-fluid" src="{{asset('img/about/Ebrapi-JK.png')}}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid" src="{{asset('img/about/Ebrapi-novo.png')}}">
                        </div>
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience">
                                <img class="img-fluid-50" src="{{asset('img/about/50-ANOS.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Conheça a Agroinsumos.com.br</h1>
                    <p class="mb-4" style="font-size: 19px;">@if ($sobre === null)
                        @elseif ($sobre->count() === 1)
                        {{ $sobre->sob_sobre }}
                        @endif
                    </p>
                    <div class="row g-5 pt-2">
                        <div class="col-sm-6">
                            <h5 class="mb-3">O que fazemos</h5>
                            <p class="mb-4">@if ($sobre === null)
                                @elseif ($sobre->count() === 1)
                                {{ $sobre->sob_fazemos }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row g-5 pt-2">
                        <div class="col-sm-6">
                            <h5 class="mb-3">Missão</h5>
                            <p class="mb-4">@if ($sobre === null)
                                @elseif ($sobre->count() === 1)
                                {{ $sobre->sob_missao }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- ======= Cta Section ======= -->
    <section id="prod" class="prod">
        <div class="container-xxl container">

            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Nosso primeiro produto</h3>
                    <p class="mb-4">TREFLAN - primeira Trifluralina comercializada no Brasil pela Elanco e um dos primeiros produtos comercializados pela Ebrapi/Agroinsumos.</p>
                    <p class="mb-4">O produto tinha posicionamento no controle de ervas monodicotelidôneas, nas culturas de algodão e soja.</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img class="primeiroproduto" src="{{asset('img/about/primeiro-produto.png')}}" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->


    <!-- ======= Politic Start ======= -->
    <div class="container-xxl py-5-5 alt-services">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Política de Sustentabilidade</h1>
                    <p class="mb-4">A responsabilidade socioambiental e a sustentabilidade, são valores permanentes, na busca da conscientização ambiental por funcionários, fornecedores, clientes e toda a comunidade.</p>
                    <p class="mb-4">Apoiamos o Programa Campo Limpo e Seguro, do Programa de Devolução de Embalagens Vazias de Agrotóxicos (INPEV).</p>
                    <a class="btn btn-secondary py-2 px-4 mt-3" href="{{asset('img/PDF-Sustentabilidade.pdf')}}" target="iframe_download">PDF</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img class="inpev" src="{{asset('img/inpev.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Politic End -->


    <!-- Team Start
    <div class="container-xxl py-5-5">
        <div class="container">
            <!--<div class="section-header">
                <h1>Equipe Ebrapi Agroinsumos</h1>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center">
                    <img class="logosdvd" src="{{asset('img/about/logos-DVD.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
