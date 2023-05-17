<!-- Criar sub-categoria -->
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
<div class="modal fade" id="criarSubCategoriaModal{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="criarSubCategoriaModal{{$categoria->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 750px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="criarCategoriaModal{{$categoria->id}}">Criar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('SubCategoria.storeSubCategoria', $categoria->id) }}" method="POST" >
                @csrf

                    <div class="row mb-3">
                        <label for="sub_nome" class="col-md-4 col-form-label text-md-end">{{ __('*Nome da sub-categoria') }}</label>

                        <div class="col-md-6">
                            <input id="sub_nome" type="text"
                            class="form-control @error('sub_nome') is-invalid @enderror"
                            name="sub_nome" value="{{ old('sub_nome') }}" required autocomplete="sub_nome" autofocus
                            placeholder="Digite o nome da sub-categoria">

                            @error('sub_nome')
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
                        {{ __('Cadastrar') }}
                    </button>
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>

  <!-- editar subcategoria -->
  @foreach($subcategorias as $subcategoria)
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
<div class="modal fade" id="editarSubCategoriaModal{{$categoria->id}}{{$subcategoria->id}}" tabindex="-1" role="dialog" aria-labelledby="editarSubCategoriaModal{{$categoria->id}}{{$subcategoria->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="editarSubCategoriaModal{{$categoria->id}}{{$subcategoria->id}}">Editar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('SubCategoria.atualizarSubCategoria', ['categoria' => $categoria->id, 'subcategoria' => $subcategoria->id]) }}" method="POST">
                @csrf
                @method('PUT')


                    <div class="row mb-3">
                        <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="text" {{ $subcategoria->id ? 'readonly' : '' }}
                            class="form-control @error('id') is-invalid @enderror"
                            name="id" value="{{ $subcategoria->id }}" required autocomplete="id" autofocus>

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="sub_nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome da sub-categoria') }}</label>

                        <div class="col-md-6">
                            <input id="sub_nome" type="text"
                             class="form-control @error('sub_nome') is-invalid @enderror"
                              name="sub_nome" value="{{ $subcategoria->sub_nome }}" required autocomplete="sub_nome" autofocus>

                            @error('sub_nome')
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

<!-- Modal de excluir subcategoria -->
@foreach($subcategorias as $subcategoria)
<div class="modal fade" id="excluirSubCategoriaModal{{$categoria->id}}{{$subcategoria->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirSubCategoriaModal{{$categoria->id}}{{$subcategoria->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="excluirSubCategoriaModal{{$categoria->id}}{{$subcategoria->id}}">Excluir Sub-Categoria</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <p>Deseja excluir essa sub-categoria?</p>
            <form action="{{ route('SubCategoria.deleteSubCategoria', ['categoria' => $categoria->id, 'subcategoria' => $subcategoria->id]) }}" method="POST">

                @csrf
                @method('DELETE')

        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
