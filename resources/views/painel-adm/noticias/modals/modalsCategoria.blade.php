
<!-- Criar categoria -->
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
<div class="modal fade" id="criarCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="criarCategoriaModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 750px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="criarCategoriaModal">Criar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('categoria.storeCategoria') }}" method="POST" >
                @csrf

                    <div class="row mb-3">
                        <label for="ca_nome" class="col-md-4 col-form-label text-md-end">{{ __('*Nome da categoria') }}</label>

                        <div class="col-md-6">
                            <input id="ca_nome" type="text"
                            class="form-control @error('ca_nome') is-invalid @enderror"
                            name="ca_nome" value="{{ old('ca_nome') }}" required autocomplete="ca_nome" autofocus
                            placeholder="Digite o nome da categoria">

                            @error('ca_nome')
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

  <!-- editar categoria -->
  @foreach($categorias as $categoria)
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
<div class="modal fade" id="editarCategoriaModal{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="editarCategoriaModal{{$categoria->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="editarCategoriaModal{{$categoria->id}}">Editar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('categoria.atualizarCategoria',$categoria->id) }}" method="POST">
                @csrf
                @method('PUT')


                    <div class="row mb-3">
                        <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="text" {{ $categoria->id ? 'readonly' : '' }}
                            class="form-control @error('id') is-invalid @enderror"
                            name="id" value="{{ $categoria->id }}" required autocomplete="id" autofocus>

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="ca_nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome da categoria') }}</label>

                        <div class="col-md-6">
                            <input id="ca_nome" type="text"
                             class="form-control @error('ca_nome') is-invalid @enderror"
                              name="ca_nome" value="{{ $categoria->ca_nome }}" required autocomplete="ca_nome" autofocus>

                            @error('ca_nome')
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

  <!-- Modal de excluir categoria -->
  @foreach($categorias as $categoria)
<div class="modal fade" id="excluirCategoriaModal{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirCategoriaModal{{$categoria->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="excluirCategoriaModal{{$categoria->id}}">Excluir Categoria</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <p>Deseja excluir essa categoria?</p>
            <form action="{{ route('categoria.deleteCategoria',$categoria->id) }}" method="POST">

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
