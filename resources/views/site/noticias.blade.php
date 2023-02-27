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


    <!-- ======= News Details ======= -->
    <div class="container-xxl news py-5" data-aos="fade-up" data-aos-delay="100">

        <div class="row" style="justify-content: center;">

            <div class="col-lg-8">

                <article class="entry">

                    <div class="entry-img">
                    <img src="{{asset('img/news/news-1.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                    <a>Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                    </h2>

                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>John Doe</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="2020-01-01">Jan 1, 2020</a></li>
                    </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                            Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                        </p>

                        <p>
                            Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                        </p>

                        <p>
                            Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                            Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                            Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                        </p>

                        <h3>Et quae iure vel ut odit alias.</h3>
                        <p>
                            Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                            Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                            Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                        </p>
                        <img src="{{asset('img/news/news-inside-post.jpg')}}" class="img-fluid" alt="">

                        <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                        <p>
                            Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                            Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                        </p>
                        <p>
                            Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                        </p>
                    </div>

                    <div class="entry-footer">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                        <li><a>Business</a></li>
                    </ul>

                    <i class="bi bi-tags"></i>
                    <ul class="tags">
                        <li><a>Creative</a></li>
                        <li><a>Tips</a></li>
                        <li><a>Marketing</a></li>
                    </ul>
                    </div>

                </article><!-- End news entry -->

            </div><!-- End news entries list -->

        </div>
    </div>

@endsection
