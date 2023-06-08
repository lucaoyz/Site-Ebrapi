 <!-- editar foto produtos -->
 @foreach($fotoProdutos as $fotoProduto)
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
 <div class="modal fade" id="editarFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}" tabindex="-1" role="dialog" aria-labelledby="editarFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title font-weight-normal" id="editarFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}">Editar</h5>
           <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
             <form action="{{ route('produtos.atualizar.fotoProduto', ['produto' => $produto->id, 'FotoProduto' => $fotoProduto->id]) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')


                     <div class="row mb-3">
                         <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                         <div class="col-md-6">
                             <input id="id" type="text" {{ $fotoProduto->id ? 'readonly' : '' }}
                             class="form-control @error('id') is-invalid @enderror"
                             name="id" value="{{ $fotoProduto->id }}" required autocomplete="id" autofocus>

                             @error('id')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $fotoProduto }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                     <div class="row mb-3">
                         <label for="fp_imagem" class="col-md-4 col-form-label text-md-end">{{ __('Imagem adicional do produto') }}</label>

                         <div class="col-md-6">
                             <input id="fp_imagem" type="file"
                              class="form-control-sm @error('fp_imagem') is-invalid @enderror"
                               name="fp_imagem" value="{{ old('fp_imagem') }}" autocomplete="fn_imagem"
                               accept=".jpeg, .png, .jpg, .gif, .svg">
                             <img src="/assets/img/fotosProdutos/{{$fotoProduto->fp_imagem}}" width="100rem;"><br>
                             @error('fp_imagem')
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
  @foreach($fotoProdutos as $fotoProduto)
  <div class="modal fade" id="excluirFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="excluirFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}">Excluir imagem adicional do produto</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

              <p>Deseja excluir essa imagem do produto?</p>
              <form action="{{ route('produtos.delete.fotoProduto', ['produto' => $produto->id, 'FotoProduto' => $fotoProduto->id]) }}" method="POST">

                  @csrf
                  @method('DELETE')

          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Excluir imagem do produto</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach
