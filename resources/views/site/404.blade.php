@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Página não encontrada</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Página não encontrada</h1>
                    <p class="mb-4">Me desculpe, a página em que você estava tentando acessar não existe!</p>
                    <a class="btn btn-secondary py-2 px-4 mt-3" href="{{route('site.index')}}">Voltar para página inicial</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

@endsection
