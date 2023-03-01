@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="row">
        <div class="col-12">
                        <!-- Filtro -->
                            <form action="{{route('categoria.searchCategoria')}}" method="post">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <a class="btn btn-outline-primary" href="{{route('noticias')}}">Voltar</a>
                                    <!-- Campo de texto para digitar oque será filtrado -->
                                    <input type="text" name="search" class="form-control" style="max-height: 42.5px" placeholder=" Filtrar pelo nome da categoria">
                                    <!-- Botão para filtrar -->
                                    <button class="btn btn-primary" type="submit">Filtrar</button>
                                    <!-- Botão para limpar filtro -->
                                    <a class="btn btn-outline-secondary" href="{{route('categoria')}}">Limpar filtro</a>
                                  </div>
                            </form>
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todas as categorias</h5>
                        </div>
                        <a class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#criarCategoriaModal">+&nbsp; adicionar categoria</a>
                    </div><br>
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

@include('painel-adm.noticias.modals.modalsCategoria')

@endsection
