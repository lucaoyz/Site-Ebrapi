@foreach ($produtos as $produto)

<!-- produto modal -->
<div class="modal fade" id="infoProduto{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="infoProduto{{$produto->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="infoProduto{{$produto->id}}">{{$produto->pro_nome}}</h5>
            &nbsp; - &nbsp;
            <span class="text-primary me-1" style="font-size: 17px;">{{$produto->pro_subtitulo}}</span>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @empty($produto->pro_foto)

                    @else
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$produto->pro_foto}}">
                    </div>
                    @endempty

                    @empty($produto->pro_foto2)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$produto->pro_foto2}}">
                    </div>
                    @endempty

                    @empty($produto->pro_foto3)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$produto->pro_foto3}}">
                    </div>
                    @endempty

                    @empty($produto->pro_foto4)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$produto->pro_foto4}}">
                    </div>
                    @endempty

                    @empty($produto->pro_foto5)

                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/fotosProdutos/{{$produto->pro_foto5}}">
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

            <p class="mb-4">@nl2br($produto->pro_descricao)</p>

        </div>
      </div>
    </div>
  </div>

  @endforeach
