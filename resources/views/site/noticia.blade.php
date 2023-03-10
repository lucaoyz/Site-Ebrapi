@extends('site.layout')

@section('content')

    <!-- ======= Page Header Start ======= -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">{{$noticia->no_titulo}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= News Details ======= -->
    <div class="container-xxl news py-5" data-aos="fade-up" data-aos-delay="100">

        <div class="row" style="justify-content: center;">

            <div class="col-lg-8">

                <article class="entry">

                    <div class="entry-img">
                    <img src="/assets/img/fotosNoticias/principal/{{$noticia->no_img}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                    <a>{{$noticia->no_titulo}}</a>
                    </h2>

                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>{{$noticia->no_autor}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time>{{$noticia->no_data->format('d/M/Y')}}</a></li>
                    </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            {{$noticia->no_corpo}}
                        </p>

                        <div class="row">
                            <div class="col-md-8 mx-auto">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/assets/img/fotosNoticias/principal/{{$noticia->no_img}}">
                                </div>
                                @foreach ($fotoNoticias as $fotoNoticia)
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/assets/img/fotosNoticias/{{$fotoNoticia->fn_imagem}}">
                                </div>
                                @endforeach
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                              </div>
                            </div>
                        </div>
                    </div>

                </article><!-- End news entry -->

            </div><!-- End news entries list -->

        </div>
    </div>

@endsection
