<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ebrapi Agroinsumos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn text-white" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2 text-white"></i>
                    @if ($contato === null)
                    @elseif ($contato->count() === 1)
                    {{ $contato->con_endereco }}
                    @endif
                </small>
                <small class="ms-4"><i class="fa fa-envelope me-2 text-white"></i>
                    @if ($contato === null)
                    @elseif ($contato->count() === 1)
                    {{ $contato->con_email }}
                    @endif
                </small>
            </div>
            <div class="col-lg-6 px-5 text-end text-white">
                <a class="text-body ms-3" href="https://www.facebook.com/ebrapiagroinsumos" target="blank_"><i class="fab fa-facebook-f" style="color: #fff"></i></a>
                <a class="text-body ms-3" href="https://instagram.com/ebrapiagronegocios?igshid=MDM4ZDc5MmU=" target="blank_"><i class="fab fa-instagram" style="color: #fff"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{route('site.index')}}" class="navbar-brand ms-4 ms-lg-0">
                <img style="width: 180px;" src="{{asset('img/logo-agroinsumos-nav.png')}}" alt="Menu">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <i class="bi bi-list mobile-nav-toggle"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{route('site.index')}}" class="nav-item nav-link"><i class="fa fa-home" style="color: #fff"></i></a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produtos</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('site.produtos')}}" class="dropdown-item">Produtos</a>
                            <a href="{{route('site.biologicos')}}" class="dropdown-item">Biológicos</a>
                            <a href="{{route('site.fertilizantes')}}" class="dropdown-item">Fertilizantes</a>
                            <a href="{{route('site.defensivos')}}" class="dropdown-item">Defensivos Agrícolas</a>
                            <a href="{{route('site.sementes')}}" class="dropdown-item">Sementes</a>
                        </div>
                    </div>
                    <a href="{{route('site.servicos')}}" class="nav-item nav-link">Serviços Prestados</a>
                    <a href="{{route('site.contato')}}" class="nav-item nav-link">Contato</a>
                    <a href="{{route('site.historico')}}" class="nav-item nav-link">Histórico</a>
                    <a href="{{route('site.sobre')}}" class="nav-item nav-link">Sobre</a>
                    @auth
                    <a href="{{route('dashboard')}}" class="nav-item nav-link">Painel</a>
                    @else
                    <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-footer footer mt-5 py-5-contact wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5-contact">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Contato</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                        @if ($contato === null)
                        @elseif ($contato->count() === 1)
                        {{ $contato->con_endereco }}
                        @endif
                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                        @if ($contato === null)
                        @elseif ($contato->count() === 1)
                        {{ $contato->con_telefone }}
                        @endif
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                        @if ($contato === null)
                        @elseif ($contato->count() === 1)
                        {{ $contato->con_email }}
                        @endif
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href="https://www.facebook.com/ebrapiagroinsumos" target="blank_"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href="https://instagram.com/ebrapiagronegocios?igshid=MDM4ZDc5MmU=" target="blank_"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Links Rápidos</h5>
                    <a class="btn btn-link" href="">Sobre</a>
                    <a class="btn btn-link" href="">Contato</a>
                    <a class="btn btn-link" href="">Serviços</a>
                    <a class="btn btn-link" href="">Parceiros</a>
                    <a class="btn btn-link" href="">Politica de Privacidade</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Horários</h5>
                    <p class="mb-1">Segunda - Quinta</p>
                    <h6 class="text-light">07:30 - 17:30</h6>
                    <p class="mb-1">Sexta</p>
                    <h6 class="text-light">07:30 - 16:30</h6>
                    <p class="mb-1">Sábado - Domingo</p>
                    <h6 class="text-light">Fechado</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">E-mail</h5>
                    <p>Fale conosco!</p>
                    <div class="position-relative w-100">
                        <a class="btn btn-contact py-2 px-4" href="mailto:ebacchin@agroinsumos.com.br">Mande um E-mail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-white copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    © <script>
                        document.write(new Date().getFullYear())
                      </script>, <a href="https://lucaoyz.github.io/Site-Eazy/" class="font-weight-bold text-white" target="_blank">
                      Feito por <i class="fa fa-bolt"></i> EAZY</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
