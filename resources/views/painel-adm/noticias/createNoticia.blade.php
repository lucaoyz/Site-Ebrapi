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

<form action="{{ route('noticias.storeNoticias') }}" method="POST" enctype="multipart/form-data">
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
            <label for="no_autor" class="form-label">Autor ou Fonte</label>
            <input name="no_autor" type="text" class="form-control @error('no_autor') is-invalid @enderror" id="no_autor"
                placeholder="Digite o autor ou fonte da notícia..">

                @error('no_autor')
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
            <label for="no_img" class="form-label">Imagem principal da notícia</label>
            <input type="file" name="no_img" id="no_img" class="form-control @error('no_corpo') is-invalid @enderror"
            accept=".jpeg,.png,.jpg,.gif,.svg">

                @error('no_img')
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
