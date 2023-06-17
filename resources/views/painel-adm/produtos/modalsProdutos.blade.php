<!-- Descrição do produto -->
@foreach ($produtos as $produto)
<div class="modal fade" id="descricaoProduto{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="descricaoProduto{{$produto->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="descricaoProduto{{$produto->id}}">Descrição do produto {{$produto->pro_nome}}</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <p>@nl2br($produto->pro_descricao)</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
@endforeach

<!-- Fotos do produto -->
@foreach ($produtos as $produto)
<div class="modal fade" id="fotosProduto{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="fotosProduto{{$produto->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="fotosProduto{{$produto->id}}">Fotos do produto {{$produto->pro_nome}}</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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

        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
@endforeach

<!-- editar produto -->
@foreach($produtos as $produto)
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
<div class="modal fade" id="editarProdutoModal{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="editarProdutoModal{{$produto->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="editarProdutoModal{{$produto->id}}">Editar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('produtos.atualizar',$produto->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                    <div class="row mb-3">
                        <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="text" {{ $produto->id ? 'readonly' : '' }}
                            class="form-control @error('id') is-invalid @enderror"
                            name="id" value="{{ $produto->id }}" required autocomplete="id" autofocus>

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="ca_id" class="col-md-4 col-form-label text-md-end">{{ __('Categoria principal') }}</label>

                        <div class="col-md-6">
                            <select name="ca_id" id="ca_id"
                            class="form-select @error('ca_id') is-invalid @enderror"
                            value="{{ old('ca_id') }}" required autocomplete="ca_id">

                                @foreach ($categorias as $categoria)
                                    <option
                                        value="{{ $categoria['id'] }}"" @if($categoria->id == $produto->ca_id) selected @endif"> {{ $categoria['ca_nome'] }}
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
                        <label for="sub_id" class="col-md-4 col-form-label text-md-end">{{ __('Sub-categoria') }}</label>

                        <div class="col-md-6">
                            <select name="sub_id" id="sub_id"
                            class="form-select @error('sub_id') is-invalid @enderror"
                            value="{{ old('sub_id') }}" required autocomplete="sub_id">

                                @foreach ($subcategorias as $subcategoria)
                                    <option
                                        value="{{ $subcategoria['id'] }}"" @if($subcategoria->id == $produto->sub_id) selected @endif"> {{ $subcategoria['sub_nome'] }}
                                    </option>
                                @endforeach

                            </select>

                            @error('sub_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="sub_id" class="col-md-4 col-form-label text-md-end">{{ __('Parceiros') }}</label>

                        <div class="col-md-6">
                            <select name="pa_id" id="pa_id"
                            class="form-select @error('pa_id') is-invalid @enderror"
                            value="{{ old('pa_id') }}" required autocomplete="pa_id">

                                @foreach ($parceiros as $parceiro)
                                    <option
                                        value="{{ $parceiro['id'] }}"" @if($parceiro->id == $produto->pa_id) selected @endif"> {{ $parceiro['pa_nome'] }}
                                    </option>
                                @endforeach

                            </select>

                            @error('pa_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pro_nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Produto') }}</label>

                        <div class="col-md-6">
                            <input id="pro_nome" type="text"
                             class="form-control @error('pro_nome') is-invalid @enderror"
                              name="pro_nome" value="{{ $produto->pro_nome }}" required autocomplete="pro_nome" autofocus>

                            @error('pro_nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pro_subtitulo" class="col-md-4 col-form-label text-md-end">{{ __('Sub-titulo do produto') }}</label>

                        <div class="col-md-6">
                            <input id="pro_subtitulo" type="text"
                             class="form-control @error('pro_subtitulo') is-invalid @enderror"
                              name="pro_subtitulo" value="{{ $produto->pro_subtitulo }}" required autocomplete="pro_subtitulo" autofocus>

                            @error('pro_subtitulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pro_descricao" class="col-md-4 col-form-label text-md-end">{{ __('Descriçao do produto') }}</label>

                        <div class="col-md-6">
                            <textarea id="pro_descricao" type="text"
                             class="form-control @error('pro_descricao') is-invalid @enderror"
                              name="pro_descricao" value="{{ $produto->pro_descricao }}" required autocomplete="pro_descricao" autofocus>{{$produto->pro_descricao}}</textarea>

                            @error('pro_descricao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="pro_foto" class="col-md-4 col-form-label text-md-end">{{ __('Imagem principal do produto') }}</label>

                      <div class="col-md-6">
                          <input id="pro_foto" type="file"
                           class="form-control-sm @error('pro_foto') is-invalid @enderror"
                            name="pro_foto" value="{{ old('pro_foto') }}" autocomplete="pro_foto"
                            accept=".jpeg, .png, .jpg, .gif, .svg">
                          <img src="/assets/img/fotosProdutos/{{$produto->pro_foto}}" width="100rem;"><br>
                          @error('pro_foto')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                    <label for="pro_foto2" class="col-md-4 col-form-label text-md-end">{{ __('Segunda imagem do produto') }}</label>

                    <div class="col-md-6">
                        <input id="pro_foto2" type="file"
                         class="form-control-sm @error('pro_foto2') is-invalid @enderror"
                          name="pro_foto2" value="{{ old('pro_foto2') }}" autocomplete="pro_foto2"
                          accept=".jpeg, .png, .jpg, .gif, .svg">
                        <img src="/assets/img/fotosProdutos/{{$produto->pro_foto2}}" width="100rem;"><br>
                        @error('pro_foto2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="pro_foto3" class="col-md-4 col-form-label text-md-end">{{ __('Terceira imagem do produto') }}</label>

                    <div class="col-md-6">
                        <input id="pro_foto3" type="file"
                         class="form-control-sm @error('pro_foto3') is-invalid @enderror"
                          name="pro_foto3" value="{{ old('pro_foto3') }}" autocomplete="pro_foto3"
                          accept=".jpeg, .png, .jpg, .gif, .svg">
                        <img src="/assets/img/fotosProdutos/{{$produto->pro_foto3}}" width="100rem;"><br>
                        @error('pro_foto3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="pro_foto4" class="col-md-4 col-form-label text-md-end">{{ __('Quarta imagem do produto') }}</label>

                    <div class="col-md-6">
                        <input id="pro_foto4" type="file"
                         class="form-control-sm @error('pro_foto4') is-invalid @enderror"
                          name="pro_foto4" value="{{ old('pro_foto4') }}" autocomplete="pro_foto4"
                          accept=".jpeg, .png, .jpg, .gif, .svg">
                        <img src="/assets/img/fotosProdutos/{{$produto->pro_foto4}}" width="100rem;"><br>
                        @error('pro_foto4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="pro_foto5" class="col-md-4 col-form-label text-md-end">{{ __('Quinta imagem do produto') }}</label>

                    <div class="col-md-6">
                        <input id="pro_foto5" type="file"
                         class="form-control-sm @error('pro_foto5') is-invalid @enderror"
                          name="pro_foto5" value="{{ old('pro_foto5') }}" autocomplete="pro_foto5"
                          accept=".jpeg, .png, .jpg, .gif, .svg">
                        <img src="/assets/img/fotosProdutos/{{$produto->pro_foto5}}" width="100rem;"><br>
                        @error('pro_foto5')
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

   <!-- Modal de excluir -->
   @foreach($produtos as $produto)
   <div class="modal fade" id="excluirProdutoModal{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirProdutoModal{{$produto->id}}" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title font-weight-normal" id="excluirProdutoModal{{$produto->id}}">Excluir Produto</h5>
             <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">

               <p>Deseja excluir esse produto?</p>

           </div>
           <div class="modal-footer">
             <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
           <form action="{{route('produtos.delete', $produto->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir produto</button>
            </form>
           </div>
         </div>
       </div>
     </div>
   @endforeach

