@extends('site.layout')

@section('content')

    <!-- ======= Page Header Start ======= -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Nome da noticia</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= News Posts ======= -->
    <div id="recent-news-posts" class="container-xxl py-5-5 recent-news-posts" data-aos="fade-up"">

        <div class="section-header">
                <h1>News</h1>
        </div>

        <div class="row gy-5">
            @foreach ($noticias as $noticia)
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                    <img src="/assets/img/fotosNoticias/principal/{{$noticia->no_img}}" class="img-fluid" alt="">
                    <span class="post-date">{{$noticia->no_data->format('d/M')}}</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                    <h3 class="post-title">{{$noticia->no_titulo}}</h3>

                    <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i><span class="ps-2">{{$noticia->ca_nome}}</span>&nbsp;
                        <i class="bi bi-person"></i><span class="ps-2">{{$noticia->no_autor}}</span>
                        </div>
                    </div>

                    <hr>

                    <a href="{{route('site.noticia', $noticia->id)}}" class="readmore stretched-link"><span>Saiba mais</span></a>

                    </div>

                </div>
            </div>
            @endforeach
                <!-- Pagina????o com e sem filtros -->
    @if (isset($filters))
    {{ $noticias->appends($filters)->links() }}
    @else
        {{ $noticias->links() }}
    @endif
        </div><br>
    </div>
    <!-- End News Posts Section -->

@endsection
