@foreach ($microbiologicos as $microbiologico)
<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$microbiologico->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$microbiologico->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$microbiologico->id}}">{{$microbiologico->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$microbiologico->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($microbiologico->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$microbiologico->pro_foto}}">
                    </div>
                    @endempty

                    @empty($microbiologico->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$microbiologico->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($microbiologico->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$microbiologico->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($microbiologico->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$microbiologico->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($microbiologico->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$microbiologico->pro_foto5}}">
                    </div>
                    @endempty

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

            <p class="mb-4">@nl2br($microbiologico->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

  @foreach ($feromonios as $feromonio)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$feromonio->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$feromonio->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$feromonio->id}}">{{$feromonio->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$feromonio->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($feromonio->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$feromonio->pro_foto}}">
                    </div>
                    @endempty

                    @empty($feromonio->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$feromonio->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($feromonio->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$feromonio->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($feromonio->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$feromonio->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($feromonio->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$feromonio->pro_foto5}}">
                    </div>
                    @endempty

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

            <p class="mb-4">@nl2br($feromonio->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

  @foreach ($armadilhas as $armadilha)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$armadilha->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$armadilha->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$armadilha->id}}">{{$armadilha->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$armadilha->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($armadilha->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$armadilha->pro_foto}}">
                    </div>
                    @endempty

                    @empty($armadilha->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$armadilha->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($armadilha->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$armadilha->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($armadilha->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$armadilha->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($armadilha->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$armadilha->pro_foto5}}">
                    </div>
                    @endempty

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

            <p class="mb-4">@nl2br($armadilha->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

