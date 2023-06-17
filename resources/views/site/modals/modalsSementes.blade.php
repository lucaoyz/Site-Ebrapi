@foreach ($graos as $grao)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$grao->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$grao->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$grao->id}}">{{$grao->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$grao->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($grao->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$grao->pro_foto}}">
                    </div>
                    @endempty

                    @empty($grao->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$grao->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($grao->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$grao->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($grao->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$grao->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($grao->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$grao->pro_foto5}}">
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

            <p class="mb-4">@nl2br($grao->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

  @foreach ($forrageiras as $forrageira)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$forrageira->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$forrageira->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$forrageira->id}}">{{$forrageira->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$forrageira->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($forrageira->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$forrageira->pro_foto}}">
                    </div>
                    @endempty

                    @empty($forrageira->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$forrageira->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($forrageira->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$forrageira->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($forrageira->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$forrageira->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($forrageira->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$forrageira->pro_foto5}}">
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

            <p class="mb-4">@nl2br($forrageira->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

  @foreach ($Hortalicas as $Hortalica)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$Hortalica->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$Hortalica->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$Hortalica->id}}">{{$Hortalica->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$Hortalica->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($Hortalica->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Hortalica->pro_foto}}">
                    </div>
                    @endempty

                    @empty($Hortalica->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Hortalica->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($Hortalica->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Hortalica->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($Hortalica->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Hortalica->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($Hortalica->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Hortalica->pro_foto5}}">
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

            <p class="mb-4">@nl2br($Hortalica->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

