@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Contato</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h6 class="mb-0">{{ __('Altere as informações da aba de contato') }}</h6>
                            </div>
                            <a href="{{route('site.contato')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Visualizar o site!</a>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="" method="POST" role="form text-left">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Endereço') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ auth()->user()->name }}" type="text" placeholder="Digite seu nome aqui..." id="user-name" name="name">
                                                @error('name')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Telefone') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ auth()->user()->name }}" type="text" placeholder="Digite seu nome aqui..." id="user-name" name="name">
                                                @error('name')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-email" class="form-control-label">{{ __('E-mail') }}</label>
                                        <div class="@error('email')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ auth()->user()->email }}" type="email" placeholder="Digite seu e-mail aqui..." id="user-email" name="email">
                                                @error('email')
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
