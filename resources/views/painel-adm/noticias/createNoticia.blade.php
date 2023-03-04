@extends('layouts.user_type.auth')

@section('content')

<form action="{{ route('noticias.storeNoticias') }}" method="POST">
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
            <label for="no_titulo" class="form-label">Titulo</label>
            <input name="no_titulo" type="text" class="form-control @error('no_titulo') is-invalid @enderror" id="no_titulo"
                placeholder="Digite o titulo da notícia..">

                @error('no_titulo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="no_corpo" class="form-label">Corpo</label>
            <textarea name="no_corpo" id="no_corpo" rows="7" class="form-control @error('no_corpo') is-invalid @enderror"
            placeholder="Digite o corpo da notícia.."></textarea>

                @error('no_corpo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

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
            <label for="no_data" class="form-label">Data da notícia</label>
            <input id="no_data" type="date"
                class="form-control @error('no_data') is-invalid @enderror"
                name="no_data" value="{{ old('no_data') }}" required autocomplete="no_data" autofocus
                max="{{ now()->toDateString('d-m-Y') }}">

                @error('no_data')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

    </div>

    <div class="card-footer">
        <button class="btn btn-primary" style="background-image: linear-gradient(310deg,#008352,#008352);" type="submit">Criar e adicionar imagens</button>

        <a href="{{route('noticias')}}" class="btn btn-secondary">Voltar</a>
    </div>

</form>

@endsection
