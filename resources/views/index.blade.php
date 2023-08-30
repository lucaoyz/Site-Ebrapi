@extends('site.layout')

@section('content')

    <!-- ======= Home Section ======= -->
    <section class="home">

        <div class="carousel-caption">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-start">
                        <p class="fs-4 text-white">Bem-vindo</p>
                        <img class="logo" src="{{asset('img/Logo-Agroinsumos-Dropshadow.png')}}" class="display-1 mb-5 animated slideInRight" alt="Menu">
                        <a href="#posts" class="btn btn-home align-middle py-2 px-4 mt-3" style="font-family: 'Gotham-Ultra', sans-serif;">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Home End -->


    <!-- ======= Recent News Posts ======= -->
    <div id="posts" class="container py-5-5" data-aos="fade-up"">

        <div class="section-header">
            <h1>News</h1>
        </div>



        <a href="{{route('site.noticias')}}" class="btn btn-secondary align-middle py-2 px-4 mt-3 ">Ver outras notícias</a>



        <!--<div class="row gy-5">
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
                        <i class="bi bi-person"></i><span class="ps-2">{{$noticia->no_autor}}</span>
                        </div>
                    </div>

                    <hr>

                    <a href="{{route('site.noticia', $noticia->id)}}" class="readmore stretched-link"><span>Saiba mais</span></a>

                    </div>

                </div>
            </div>
            @endforeach
        </div><br>-->

    </div>
    <!-- End Recent news Posts Section -->


    <!-- ======= Products Start ======= -->
    <section>
        <div class="container-xxl py-5-5">
            <div class="container">
                <div class="section-header">
                    <h1>Produtos</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.sementes')}}"><img src="{{asset('img/products/sementes.png')}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.sementes')}}">Sementes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.fertilizantes')}}"><img class="img-fluid" src="{{asset('img/products/fertilizante.png')}}" alt=""></a>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.fertilizantes')}}">Fertilizantes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.defensivos')}}"><img class="img-fluid" src="{{asset('img/products/defensivo.png')}}" alt=""></a>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.defensivos')}}">Defensivos Agrícolas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.biologicos')}}"><img class="img-fluid" src="{{asset('img/products/biologicos.png')}}" alt=""></a>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.biologicos')}}">Biológicos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative">
                                <a href="{{route('site.linhaorganica')}}"><img class="img-fluid" src="{{asset('img/products/linha-organica.png')}}" alt=""></a>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('site.linhaorganica')}}">Linha Orgânica</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product End -->


    <!-- ======= Partners ======= -->
    <div class="container py-5-5" data-aos="zoom-out">
        <div class="section-header">
            <h1>Parceiros</h1>
        </div>

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                @foreach ($parceiros as $parceiro)
            <div class="swiper-slide"><a href="{{$parceiro->pa_link}}" target="_blank"><img src="assets/img/parceiros/{{$parceiro->pa_logo}}" class="img-fluid" alt=""></a></div>
            @endforeach
            </div>
        </div>

    </div>
    <!-- End Partners -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>COMPRE AGORA</h3>
                    <p style="font-size: 19px;">Converse conosco via WhatsApp e adquira seu produto diretamente com nossa equipe.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="btn btn-secondary align-middle py-2 px-4 mt-3" href="https://wa.me/+5519992271158" target="_blank">Fale conosco</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->


    <!-- ======= Services Start ======= -->
    <div class="container-xxl py-5-5">
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
                            <h5 class="mb-3">Reflorestamento/Recomposição de mata-ciliar</h4>
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
    <!-- End Services -->


    <!-- ======= Historic Start =======
    <section>
        <div class="historic">
            <div class="container-xxl py-5-5">
                <div class="container">
                    <div class="section-header">
                        <h1>Explore a nossa Galeria</h1>
                    </div>
                    <div class="portfolio-isotope">

                        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-rcol-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                <img src="{{asset('img/historic/historic-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{asset('img/historic/historic-1.jpg')}}" title="Corn" data-lightbox="gallery" class="glightbox preview-link"><i class="fa fa-plus" style="font-size: 23px;"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Historic End -->


@endsection
