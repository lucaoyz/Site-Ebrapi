@extends('layouts.user_type.auth')

@section('content')
<form action="{{ route('perfil.changePassword') }}" method="POST">
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
            <label for="oldPasswordInput" class="form-label">Senha antiga</label>
            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                placeholder="Senha antiga">

                @error('old_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="newPasswordInput" class="form-label">Nova senha</label>
            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                placeholder="Nova senha">

                @error('new_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="confirmNewPasswordInput" class="form-label">Confirme sua nova senha</label>
            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                placeholder="Confirme sua nova senha">
        </div>

    </div>

    <div class="card-footer">
        <button class="btn btn-primary" style="background-image: linear-gradient(310deg,#008352,#008352);" type="submit">Confirmar</button>

        <a href="{{route('perfil')}}" class="btn btn-secondary">Voltar</a>
    </div>

</form>
@endsection
