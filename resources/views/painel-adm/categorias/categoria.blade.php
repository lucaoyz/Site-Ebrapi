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
                            <h5 class="mb-0">Todas as categorias</h5>
                        </div>
                        <a class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#criarCategoriaModal">+&nbsp; adicionar categoria</a>
                    </div><br>
                    <a href="{{route('produtos')}}" class="btn bg-gradient-dark btn-sm mb-0" type="button">Ir para produtos</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Titulo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$categoria->id}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$categoria->ca_nome}}</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('subcategoria', $categoria->id)}}" class="btn btn-outline-primary btn-sm mb-0">
                                            SUB-CATEGORIAS
                                        </a>
                                        <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#editarCategoriaModal{{$categoria->id}}">
                                            <i class="fa fa-pencil text-secondary"></i>
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#excluirCategoriaModal{{$categoria->id}}">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Paginação com e sem filtros -->
                        @if (isset($filters))
                        {{ $categorias->appends($filters)->links() }}
                        @else
                            {{ $categorias->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('painel-adm.categorias.modalsCategoria')

@endsection
