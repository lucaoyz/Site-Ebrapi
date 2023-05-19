@extends('layouts.user_type.auth')

@section('content')
<div>
    @if(session('success'))
   <div class="alert alert-success text-white">
      {{ session('success') }}
   </div>
 @endif
 @if(session('error'))
 <div class="alert alert-danger text-white">
    {{ session('error') }}
 </div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todas os parceiros</h5>
                        </div>
                        <a href="{{route('parceiros.create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Adicionar parceiro</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Categoria Principal
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Logo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nome
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Link
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($parceiros as $parceiro)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$parceiro->id}}</p>
                                    </td>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$parceiro->ca_nome}}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/parceiros/{{$parceiro->pa_logo}}" width="100rem;"><br>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$parceiro->pa_nome}}</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{$parceiro->pa_link}}" target="_blank" class="text-xs font-weight-bold mb-0">{{$parceiro->pa_link}}</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#editarParceiroModal{{$parceiro->id}}">
                                            <i class="fa fa-pencil text-secondary"></i>
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#excluirParceiroModal{{$parceiro->id}}">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <!-- Paginação com e sem filtros -->
                    @if (isset($filters))
                        {{ $parceiros->appends($filters)->links() }}
                    @else
                        {{ $parceiros->links() }}
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('painel-adm.parceiros.modalsParceiros')

@endsection
