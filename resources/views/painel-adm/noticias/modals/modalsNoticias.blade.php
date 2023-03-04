<!-- Corpo da noticia -->
@foreach ($noticias as $noticia)
<div class="modal fade" id="corpoNoticia{{$noticia->id}}" tabindex="-1" role="dialog" aria-labelledby="corpoNoticia{{$noticia->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="corpoNoticia{{$noticia->id}}">Corpo da noticia {{$noticia->no_titulo}}</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <p>{{$noticia->no_corpo}}</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
