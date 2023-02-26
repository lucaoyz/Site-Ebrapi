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
            <input name="no_corpo" type="text" class="form-control @error('no_corpo') is-invalid @enderror" id="no_corpo"
                placeholder="Digite o corpo da notícia..">

                @error('no_corpo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="no_categoria" class="form-label">Categoria</label>
            <input name="no_categoria" type="text" class="form-control @error('no_categoria') is-invalid @enderror" id="no_categoria"
                placeholder="Categoria da notícia">

                @error('no_categoria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="no_data" class="form-label">Data da notícia</label>
            <input name="no_data" type="date" class="form-control @error('no_data') is-invalid @enderror" id="no_data"
                placeholder="Categoria da notícia">

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
