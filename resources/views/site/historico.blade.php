@extends('site.layout')

@section('content')

    <!-- ======= Page Header Start ======= -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 mb-3 text-white animated slideInDown">News</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{route('site.index')}}">Menu</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Historic Start ======= -->
    <section class="section-bg-white">
        <div class="container-xxl py-5-5">
            <div class="container">
                <div class="section-header">
                    <h1>Explore a nossa Galeria</h1>
                </div>

                <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/d19f20e37d825a0da0c2128c74cf34c1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
            </div>
        </div>
    </section>
    <!-- Historic End -->

@endsection
