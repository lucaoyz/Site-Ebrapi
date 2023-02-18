@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
        @endif
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Sobre nós</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h6 class="mb-0">{{ __('Altere as informações da página sobre nós') }}</h6>
                            </div>
                            <a href="{{route('site.sobre')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Visualizar o site!</a>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="{{route('missao.atualizarMissao')}}" method="POST" role="form text-left">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Sobre nós') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="@if ($sobre === null)@elseif($sobre->count() === 1){{ $sobre->sob_sobre }}@endif"
                                            type="text" placeholder="Digite o sobre aqui..." id="user-name" name="sob_sobre">
                                                @error('name')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Missão') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="@if ($sobre === null)@elseif($sobre->count() === 1){{ $sobre->sob_missao }}@endif"
                                            type="text" placeholder="Digite a missão aqui..." id="user-name" name="sob_missao">
                                                @error('name')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Salvar alterações' }}</button>
                            </div>
                        </form>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
