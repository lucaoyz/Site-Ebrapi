 <!-- editar notícia -->
@foreach($fotoNoticias as $fotoNoticia)
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Pode haver problemas em seu formulário!<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="modal fade" id="editarFotoNoticiaModal{{$noticia->id}}{{$fotoNoticia->id}}" tabindex="-1" role="dialog" aria-labelledby="editarFotoNoticiaModal{{$noticia->id}}{{$fotoNoticia->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="editarFotoNoticiaModal{{$noticia->id}}{{$fotoNoticia->id}}">Editar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('noticias.atualizar.fotoNoticias', ['noticia' => $noticia->id, 'FotoNoticia' => $fotoNoticia->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                    <div class="row mb-3">
                        <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="text" {{ $fotoNoticia->id ? 'readonly' : '' }}
                            class="form-control @error('id') is-invalid @enderror"
                            name="id" value="{{ $fotoNoticia->id }}" required autocomplete="id" autofocus>

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $fotoNoticia }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fn_imagem" class="col-md-4 col-form-label text-md-end">{{ __('Imagem adicional da notícia') }}</label>

                        <div class="col-md-6">
                            <input id="fn_imagem" type="file"
                             class="form-control-sm @error('fn_imagem') is-invalid @enderror"
                              name="fn_imagem" value="{{ old('fn_imagem') }}" autocomplete="fn_imagem"
                              accept=".jpeg, .png, .jpg, .gif, .svg">
                            <img src="/assets/img/fotosNoticias/{{$fotoNoticia->fn_imagem}}" width="100rem;"><br>
                            @error('fn_imagem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

        </div>
        <div class="modal-footer">
            <div class="row mb-0">
                    <button type="submit" class="btn btn-primary" style="background-image: linear-gradient(310deg,#008352,#008352);">
                        {{ __('Atualizar') }}
                    </button>
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>
  @endforeach

 <!-- Modal de excluir/limpar notícia -->
 @foreach($fotoNoticias as $fotoNoticia)
 <div class="modal fade" id="excluirFotoNoticiaModal{{$noticia->id}}{{$fotoNoticia->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirFotoNoticiaModal{{$noticia->id}}{{$fotoNoticia->id}}" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title font-weight-normal" id="excluirFotoNoticiaModal{{$noticia->id}}{{$fotoNoticia->id}}">Excluir imagem adicional da notícia</h5>
           <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">

             <p>Deseja excluir essa imagem da notícia?</p>
             <form action="{{ route('noticias.delete.fotoNoticias', ['noticia' => $noticia->id, 'FotoNoticia' => $fotoNoticia->id]) }}" method="POST">

                 @csrf
                 @method('DELETE')

         </div>
         <div class="modal-footer">
           <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
           <button type="submit" class="btn btn-danger">Excluir imagem da notícia</button>
         </form>
         </div>
       </div>
     </div>
   </div>
 @endforeach
