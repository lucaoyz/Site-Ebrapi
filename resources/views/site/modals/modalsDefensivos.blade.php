@foreach ($Inseticidas as $Inseticida)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$Inseticida->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$Inseticida->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$Inseticida->id}}">{{$Inseticida->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$Inseticida->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($Inseticida->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Inseticida->pro_foto}}">
                    </div>
                    @endempty

                    @empty($Inseticida->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Inseticida->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($Inseticida->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Inseticida->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($Inseticida->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Inseticida->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($Inseticida->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Inseticida->pro_foto5}}">
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

            <p class="mb-4">@nl2br($Inseticida->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

  @foreach ($Herbicidas as $Herbicida)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$Herbicida->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$Herbicida->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$Herbicida->id}}">{{$Herbicida->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$Herbicida->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($Herbicida->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Herbicida->pro_foto}}">
                    </div>
                    @endempty

                    @empty($Herbicida->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Herbicida->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($Herbicida->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Herbicida->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($Herbicida->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Herbicida->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($Herbicida->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Herbicida->pro_foto5}}">
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

            <p class="mb-4">@nl2br($Herbicida->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

  @foreach ($Fungicidas as $Fungicida)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$Fungicida->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$Fungicida->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$Fungicida->id}}">{{$Fungicida->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$Fungicida->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($Fungicida->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Fungicida->pro_foto}}">
                    </div>
                    @endempty

                    @empty($Fungicida->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Fungicida->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($Fungicida->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Fungicida->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($Fungicida->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Fungicida->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($Fungicida->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Fungicida->pro_foto5}}">
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

            <p class="mb-4">@nl2br($Fungicida->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach

  @foreach ($Acaricidas as $Acaricida)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$Acaricida->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$Acaricida->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$Acaricida->id}}">{{$Acaricida->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$Acaricida->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($Acaricida->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Acaricida->pro_foto}}">
                    </div>
                    @endempty

                    @empty($Acaricida->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Acaricida->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($Acaricida->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Acaricida->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($Acaricida->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Acaricida->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($Acaricida->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$Acaricida->pro_foto5}}">
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

            <p class="mb-4">@nl2br($Acaricida->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach


