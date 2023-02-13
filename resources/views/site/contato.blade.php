@extends('site.layout')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header-contato wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Contato</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contato</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-5">Se você tiver alguma dúvida, entre em contato conosco</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center h-100 ">
                        <h5>Telefone</h5>
                        <p class="mb-5 border-bottom"><i class="fa fa-phone-alt me-3"></i>
                            @if ($contato === null)
                            @elseif ($contato->count() === 1)
                            {{ $contato->con_telefone }}
                            @endif
                        </p>
                        <h5>Email</h5>
                        <p class="mb-5 border-bottom"><i class="fa fa-envelope me-3"></i>
                            @if ($contato === null)
                            @elseif ($contato->count() === 1)
                            {{ $contato->con_email }}
                            @endif
                        </p>
                        <h5>Localização</h5>
                        <p class="mb-5 border-bottom"><i class="fa fa-map-marker-alt me-3"></i>
                            @if ($contato === null)
                            @elseif ($contato->count() === 1)
                            {{ $contato->con_endereco }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.049415417272!2d-47.395585584481424!3d-22.763547338499617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89c23a6761e5f%3A0xd85a9afc433edade!2sR.%20dos%20Tupis%2C%201158%20-%20Jardim%20S%C3%A3o%20Francisco%2C%20Santa%20B%C3%A1rbara%20d&#39;Oeste%20-%20SP%2C%2013456-032!5e0!3m2!1spt-BR!2sbr!4v1676325193419!5m2!1spt-BR!2sbr"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
