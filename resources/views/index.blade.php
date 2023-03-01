@extends('site.layout')

@section('content')

    <!-- ======= Home Section ======= -->
    <section id="home">

        <div class="carousel-caption">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-start">
                        <p class="fs-4 text-white">Bem-vindo</p>
                        <img style="width: 740px;" src="{{asset('img/Logo-Agroinsumos.png')}}" class="display-1 mb-5 animated slideInRight" alt="Menu">
                        <a class="btn btn-contact py-2 px-4" href="#recent-news-posts">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Home End -->


    <!-- ======= Recent news Posts ======= -->
    <div id="recent-news-posts" class="container-xxl py-5-5 recent-news-posts" data-aos="fade-up"">

        <div class="section-header">
                <h1>News</h1>
        </div>

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">

                <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('img/news/news-1.jpg')}}" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
                </div>

                <div class="post-content d-flex flex-column">

                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                    </div>
                </div>

                <hr>

                <a href="{{route('site.noticias')}}" class="readmore stretched-link"><span>Saiba mais</span></a>

                </div>

            </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-item position-relative h-100">

                <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('img/news/news-2.jpg')}}" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
                </div>

                <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                    </div>
                </div>

                <hr>

                <a href="news-details.html" class="readmore stretched-link"><span>Saiba mais</span></a>

                </div>

            </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('img/news/news-3.jpg')}}" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
                </div>

                <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                    </div>
                </div>

                <hr>

                <a href="news-details.html" class="readmore stretched-link"><span>Saiba mais</span></a>

                </div>

            </div>
            </div><!-- End post item -->

        </div>

    </div>
    <!-- End Recent news Posts Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="btn btn-contact align-middle py-2 px-4" href="#recent-news-posts">Saiba mais</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Services Start ======= -->
    <div id="services" class="container-xxl py-5-5">
        <div class="container">
            <div class="section-header">
                <h1>Serviços Prestados</h1>
            </div>
            <div class="row gy-5 gx-4" style="justify-content: center;">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/services/service-1.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid" src="{{asset('img/services/service-1.png')}}" alt="">
                            </div>
                            <h5 class="mb-3" style="font-size: 21px;">Reflorestamento: Recomposição de mata-ciliar</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/services/service-2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid" src="{{asset('img/services/service-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-3" style="font-size: 21px;">Acompanhamento Agronômico</h5>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    <!-- Gallery Start -->
    <section>
        <div class="container-xxl py-5-5">
            <div class="container">
                <div class="section-header">
                    <h1>Explore o nosso Histórico</h1>
                </div>
                <div class="row g-0">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-5.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-5.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-1.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-2.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-6.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-7.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-7.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-3.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-4.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="img/gallery-8.jpg" data-lightbox="gallery">
                                    <img class="img-fluid" src="img/gallery-8.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery End -->


    <!-- Product Start -->
    <div class="container-xxl py-5-5">
        <div class="container">
            <div class="section-header">
                <h1>Nossos Produtos</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img/products/product-1.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{route('site.biologicos')}}"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="{{route('site.biologicos')}}">Biológicos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img/products/product-2.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{route('site.fertilizantes')}}"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="{{route('site.fertilizantes')}}">Fertilizantes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img/products/product-3.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{route('site.defensivos')}}"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="{{route('site.defensivos')}}">Defensivos Agrícolas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img/products/product-4.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{route('site.sementes')}}"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="{{route('site.sementes')}}">Sementes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- ======= Partners ======= -->
    <section class="partners">
        <div class="container-xxl wow fadeInUp" data-wow-delay="0.1s">
            <!--<div class="container">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{asset('img/partners/logo-biocontrole.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-aminoagro.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-koppert.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-bayer.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-monsanto.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-semeali.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-sementesbonamigo.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-nutrien.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-fmc.png')}}" alt="">
                    <img src="{{asset('img/partners/logo-yara.png')}}" alt="">
                    <img src="{{asset('img/partners/.png')}}" alt="">
                </div>
            </div>-->
        </div>
    </section>
    <!-- End Partners -->


    <!-- Features Start -->
    <div class="container-xxl py-5-5 alt-services">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Política de Privacidade</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Justo magna erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita erat ipsum et lorem et sit</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/award.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">183</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Award Winning</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/animal.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">2619</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Total Animals</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

@endsection
