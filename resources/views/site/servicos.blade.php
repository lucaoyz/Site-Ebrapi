@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-servicos wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Outros Serviços</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Outros Serviços</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div id="services" class="container-xxl py-5-5">
        <div class="container">
            <div class="section-header">
                <h1>Outros Serviços</h1>
            </div>
            <div class="row gy-5 gx-4" style="justify-content: center;">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/services/service-1.jpg" alt="">
                        </div>
                        <div class="service-text p-5">
                            <div class="service-icon">
                                <img class="img-fluid" src="{{asset('img/services/service-1.png')}}" alt="">
                            </div>
                            <h5 class="mb-3">Reflorestamento e Recomposição de mata-ciliar</h4>
                            <p class="mb-4">Implantação de Florestas Nativas, com serviços de plantio e manutenção das mudas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/services/service-2.jpg" alt="">
                        </div>
                        <div class="service-text p-5">
                            <div class="service-icon">
                                <img class="img-fluid" src="{{asset('img/services/service-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-3">Assistência Técnica Agronômica</h5>
                            <p class="mb-4">Serviços de análise de solo, de folhas e de recomendação técnica de manejo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
