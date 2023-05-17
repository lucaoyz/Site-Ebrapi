<!-- editar parceiro -->
@foreach($parceiros as $parceiro)
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
<div class="modal fade" id="editarParceiroModal{{$parceiro->id}}" tabindex="-1" role="dialog" aria-labelledby="editarParceiroModal{{$parceiro->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="editarParceiroModal{{$parceiro->id}}">Editar</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('parceiros.atualizar', $parceiro->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                    <div class="col-md-6">
                        <input id="id" type="text" {{ $parceiro->id ? 'readonly' : '' }}
                        class="form-control @error('id') is-invalid @enderror"
                        name="id" value="{{ $parceiro->id }}" required autocomplete="id" autofocus>

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
                                    value="{{ $categoria['id'] }}"" @if($categoria->id == $parceiro->ca_id) selected @endif"> {{ $categoria['ca_nome'] }}
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
                                    value="{{ $subcategoria['id'] }}"" @if($subcategoria->id == $parceiro->sub_id) selected @endif"> {{ $subcategoria['sub_nome'] }}
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
                        <label for="pa_nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do parceiro') }}</label>

                        <div class="col-md-6">
                            <input id="pa_nome" type="text"
                             class="form-control @error('pa_nome') is-invalid @enderror"
                              name="pa_nome" value="{{ $parceiro->pa_nome }}" required autocomplete="pa_nome" autofocus>

                            @error('pa_nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pa_logo" class="col-md-4 col-form-label text-md-end">{{ __('Logo do parceiro') }}</label>

                        <div class="col-md-6">
                            <input id="pa_logo" type="file"
                             class="form-control-sm @error('pa_logo') is-invalid @enderror"
                              name="pa_logo" value="{{ old('pa_logo') }}" autocomplete="pa_logo"
                              accept=".jpeg, .png, .jpg, .gif, .svg">
                            <img src="/assets/img/parceiros/{{$parceiro->pa_logo}}" width="100rem;"><br>
                            @error('pa_logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pa_link" class="col-md-4 col-form-label text-md-end">{{ __('Link do site do parceiro') }}</label>

                        <div class="col-md-6">
                            <input id="pa_link" type="text"
                             class="form-control @error('pa_link') is-invalid @enderror"
                              name="pa_link" value="{{ $parceiro->pa_link }}" required autocomplete="pa_link" autofocus>

                            @error('pa_link')
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
   @foreach($parceiros as $parceiro)
   <div class="modal fade" id="excluirParceiroModal{{$parceiro->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirParceiroModal{{$parceiro->id}}" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title font-weight-normal" id="excluirParceiroModal{{$parceiro->id}}">Excluir</h5>
             <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">

               <p>Deseja excluir esse parceiro?</p>
               <form action="{{ route('parceiros.delete',$parceiro->id) }}" method="POST">

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

