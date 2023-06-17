@extends('layouts.user_type.auth')

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Oops!</strong> Há alguns problemas em seu envio.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif (session('error'))
        <div class="mt-3  alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-text text-white">
                {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </button>
        </div>
        @endif

        <div class="mb-3">
            <label for="ca_id" class="form-label">Categoria</label>
            @empty($categoriaExiste)
            <a href="{{route('categoria')}}" class="text-primary">
                Não há nenhuma categoria, clique aqui para adicionar a primeira..
                </a>
            @endempty
                <select name="ca_id" id="ca_id"
                class="form-select @error('ca_id') is-invalid @enderror"
                value="{{ old('ca_id') }}" required autocomplete="ca_id">

                        <option
                            value=""> Selecione uma categoria..
                        </option>

                        <optgroup label="Categorias">
                    @foreach ($categorias as $categoria)
                        <option
                            value="{{ $categoria['id'] }}"> {{ $categoria['ca_nome'] }}
                        </option>
                    @endforeach
                        </optgroup>
                </select>

                @error('ca_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="ca_id" class="form-label">Sub-Categoria (Opcional)</label>
                <select name="sub_id" id="ca_id"
                class="form-select @error('sub_id') is-invalid @enderror"
                value="{{ old('sub_id') }}" autocomplete="sub_id">

                        <option
                            value=""> Selecione uma sub-categoria..
                        </option>


                <optgroup label="Subcategorias">

                    @foreach ($subcategorias as $subcategoria)
                    <option
                        value="{{ $subcategoria->id }}"> {{ $subcategoria->sub_nome }}
                    </option>

                    @endforeach
                </optgroup>




                </select>

                @error('ca_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="pa_id" class="form-label">Parceiros</label>
            @empty($parceiroExiste)
            <a href="{{route('parceiros')}}" class="text-primary">
                Não há nenhum parceiro, clique aqui para adicionar o primeiro..
                </a>
            @endempty
                <select name="pa_id" id="pa_id"
                class="form-select @error('pa_id') is-invalid @enderror"
                value="{{ old('pa_id') }}" required autocomplete="pa_id">

                        <option
                            value=""> Selecione um parceiro..
                        </option>

                        <optgroup label="Parceiros">
                    @foreach ($parceiros as $parceiro)
                        <option
                            value="{{ $parceiro['id'] }}"> {{ $parceiro['pa_nome'] }}
                        </option>
                    @endforeach
                        </optgroup>
                </select>

                @error('ca_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_foto" class="form-label">Foto principal do produto</label>
            <input type="file" name="pro_foto" id="pro_foto" class="form-control @error('pro_foto') is-invalid @enderror"
            accept=".jpeg,.png,.jpg,.gif,.svg">

                @error('pro_foto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_foto2" class="form-label">Segunda foto do produto</label>
            <input type="file" name="pro_foto2" id="pro_foto2" class="form-control @error('pro_foto2') is-invalid @enderror"
            accept=".jpeg,.png,.jpg,.gif,.svg">

                @error('pro_foto2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_foto3" class="form-label">Terceira foto do produto</label>
            <input type="file" name="pro_foto3" id="pro_foto3" class="form-control @error('pro_foto3') is-invalid @enderror"
            accept=".jpeg,.png,.jpg,.gif,.svg">

                @error('pro_foto3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_foto4" class="form-label">Quarta foto do produto</label>
            <input type="file" name="pro_foto4" id="pro_foto4" class="form-control @error('pro_foto4') is-invalid @enderror"
            accept=".jpeg,.png,.jpg,.gif,.svg">

                @error('pro_foto4')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_foto5" class="form-label">Quinta foto do produto</label>
            <input type="file" name="pro_foto5" id="pro_foto5" class="form-control @error('pro_foto5') is-invalid @enderror"
            accept=".jpeg,.png,.jpg,.gif,.svg">

                @error('pro_foto5')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_nome" class="form-label">Nome do produto</label>
            <input name="pro_nome" type="text" class="form-control @error('pro_nome') is-invalid @enderror" id="pro_nome"
                placeholder="Digite o nome do produto..">

                @error('pro_nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_subtitulo" class="form-label">Sub-titulo do produto</label>
            <input name="pro_subtitulo" type="text" class="form-control @error('pro_subtitulo') is-invalid @enderror" id="pro_subtitulo"
                placeholder="Digite o sub-titulo do produto..">

                @error('pro_subtitulo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="pro_descricao" class="form-label">Descrição do produto</label>
            <textarea name="pro_descricao" id="pro_descricao" rows="7" class="form-control @error('pro_descricao') is-invalid @enderror"
            placeholder="Digite a descrição do produto.."></textarea>

                @error('pro_descricao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>

    <div class="card-footer">
        <button class="btn btn-primary" style="background-image: linear-gradient(310deg,#008352,#008352);" type="submit">Cadastrar</button>

        <a href="{{route('parceiros')}}" class="btn btn-secondary">Voltar</a>
    </div>

</form>

@endsection
