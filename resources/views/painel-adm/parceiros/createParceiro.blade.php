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

<form action="{{ route('parceiros.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="ca_id" class="form-label">Sub-Categoria</label>
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
            <label for="pa_nome" class="form-label">Nome do parceiro</label>
            <input name="pa_nome" type="text" class="form-control @error('pa_nome') is-invalid @enderror" id="pa_nome"
                placeholder="Digite o nome do parceiro..">

                @error('pa_nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="pa_logo" class="form-label">Logo do parceiro</label>
            <input type="file" name="pa_logo" id="pa_logo" class="form-control @error('pa_logo') is-invalid @enderror"
            accept=".jpeg,.png,.jpg,.gif,.svg">

                @error('pa_logo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror
        </div>

        <div class="mb-3">
            <label for="pa_link" class="form-label">Link do site do parceiro</label>
            <input name="pa_link" type="text" class="form-control @error('pa_link') is-invalid @enderror" id="pa_link"
                placeholder="Digite o link do parceiro..">

                @error('pa_link')
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
