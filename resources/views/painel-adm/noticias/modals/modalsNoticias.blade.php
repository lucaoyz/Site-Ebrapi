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

<!-- editar notícia -->
@foreach($noticias as $noticia)
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
<div class="modal fade" id="editarNoticiaModal{{$noticia->id}}" tabindex="-1" role="dialog" aria-labelledby="editarNoticiaModal{{$noticia->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="editarNoticiaModal{{$noticia->id}}">Editar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('noticias.atualizarNoticias',$noticia->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                    <div class="row mb-3">
                        <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="text" {{ $noticia->id ? 'readonly' : '' }}
                            class="form-control @error('id') is-invalid @enderror"
                            name="id" value="{{ $noticia->id }}" required autocomplete="id" autofocus>

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_titulo" class="col-md-4 col-form-label text-md-end">{{ __('Titulo da notícia') }}</label>

                        <div class="col-md-6">
                            <input id="no_titulo" type="text"
                             class="form-control @error('no_titulo') is-invalid @enderror"
                              name="no_titulo" value="{{ $noticia->no_titulo }}" required autocomplete="no_titulo" autofocus>

                            @error('no_titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_autor" class="col-md-4 col-form-label text-md-end">{{ __('Autor ou fonte da notícia') }}</label>

                        <div class="col-md-6">
                            <input id="no_autor" type="text"
                             class="form-control @error('no_autor') is-invalid @enderror"
                              name="no_autor" value="{{ $noticia->no_autor }}" required autocomplete="no_autor" autofocus>

                            @error('no_autor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_corpo" class="col-md-4 col-form-label text-md-end">{{ __('Corpo da notícia') }}</label>

                        <div class="col-md-6">
                            <textarea id="no_corpo" type="text"
                             class="form-control @error('no_corpo') is-invalid @enderror"
                              name="no_corpo" value="{{ $noticia->no_corpo }}" required autocomplete="no_corpo" autofocus>{{$noticia->no_corpo}}</textarea>

                            @error('no_corpo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="no_img" class="col-md-4 col-form-label text-md-end">{{ __('Imagem principal da notícia') }}</label>

                      <div class="col-md-6">
                          <input id="no_img" type="file"
                           class="form-control-sm @error('no_img') is-invalid @enderror"
                            name="no_img" value="{{ old('no_img') }}" autocomplete="no_img"
                            accept=".jpeg, .png, .jpg, .gif, .svg">
                          <img src="/assets/img/fotosNoticias/principal/{{$noticia->no_img}}" width="100rem;"><br>
                          @error('no_img')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                    <div class="row mb-3">
                        <label for="ca_id" class="col-md-4 col-form-label text-md-end">{{ __('Categoria da notícia') }}</label>

                        <div class="col-md-6">
                            <select name="ca_id" id="ca_id"
                            class="form-select @error('ca_id') is-invalid @enderror"
                            value="{{ old('ca_id') }}" required autocomplete="ca_id">

                                @foreach ($categorias as $categoria)
                                    <option
                                        value="{{ $categoria['id'] }}"" @if($categoria->id == $noticia->ca_id) selected @endif"> {{ $categoria['ca_nome'] }}
                                    </option>
                                @endforeach

                            </select>

                            @error('ca_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_data" class="col-md-4 col-form-label text-md-end">{{ __('Data da notícia') }}</label>

                        <div class="col-md-6">
                            <input id="no_data" type="date"
                            class="form-control @error('no_data') is-invalid @enderror"
                            name="no_data" value="{{ $noticia->no_data->format('Y-m-d') }}" required autocomplete="no_data" autofocus
                            max="{{ now()->toDateString('d-m-Y') }}">

                            @error('no_data')
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
   @foreach($noticias as $noticia)
   <div class="modal fade" id="excluirNoticiaModal{{$noticia->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirNoticiaModal{{$noticia->id}}" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title font-weight-normal" id="excluirNoticiaModal{{$noticia->id}}">Excluir Notícia</h5>
             <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">

               <p>Deseja excluir essa notícia?</p>
               <form action="{{ route('noticias.limparFotoNoticias',$noticia->id) }}" method="POST">

                   @csrf
                   @method('DELETE')

           </div>
           <div class="modal-footer">
             <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
             <button type="submit" class="btn btn-danger">Limpar imagens da notícia</button>
           </form>
           <form action="{{route('noticias.deleteNoticias', $noticia->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir notícia</button>
            </form>
           </div>
         </div>
       </div>
     </div>
   @endforeach

