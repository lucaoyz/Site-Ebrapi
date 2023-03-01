@extends('site.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">Sobre Nós</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Sobre</li>
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
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience">
                                <img class="img-fluid-49" src="{{asset('img/about/49-ANOS.png')}}">
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{asset('img/about/Cópia-de-041.jpg')}}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid" src="{{asset('img/about/Cópia-de-039.jpg')}}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid" src="{{asset('img/about/Ebrapi-novo.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Conheça a Agroinsumos.com.br</h1>
                    <span class="mb-4" style="font-size: 19px;">@if ($sobre === null)
                        @elseif ($sobre->count() === 1)
                        {{ $sobre->sob_sobre }}
                        @endif
                    </span>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <h5 class="mb-3">Missão</h5>
                            <span class="mb-4" style="font-size: 19px;">@if ($sobre === null)
                                @elseif ($sobre->count() === 1)
                                {{ $sobre->sob_missao }}
                                @endif
                            </span>
                        </div>
                    </div>
                    <a class="btn btn-secondary py-2 px-4" href="{{route('site.sobre')}}">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="btn btn-contact align-middle py-2 px-4" href="#recent-blog-posts">Saiba mais</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Team</p>
                <h1 class="mb-5">Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="img/team-1.jpg" alt="">
                        <h5>Adam Crew</h5>
                        <p class="text-primary">Founder</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="img/team-2.jpg" alt="">
                        <h5>Doris Jordan</h5>
                        <p class="text-primary">Veterinarian</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="img/team-3.jpg" alt="">
                        <h5>Jack Dawson</h5>
                        <p class="text-primary">Farmer</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
