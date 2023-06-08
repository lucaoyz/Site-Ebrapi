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
                            <h5 class="mb-0">Todas os produtos</h5>
                        </div>
                        <a href="{{route('produtos.create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Adicionar produto</a>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sub-categoria
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Parceiro
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Fotos
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nome
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Subtitulo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Descrição
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$produto->id}}teste</p>
                                    </td>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$produto->id}}teste</p>
                                    </td>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$produto->id}}teste</p>
                                    </td>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$produto->id}}teste</p>
                                    </td>
                                    <td>
                                        <a href="{{route('produtos.fotoProduto', $produto->id)}}">
                                        <div>
                                            <img src="/assets/img/fotosProdutos/principal/{{$produto->pro_img}}" width="100rem;"><br>
                                                +&nbsp; Acrescentar
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$produto->id}}teste</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$produto->id}}teste</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$produto->id}}teste</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#editarProdutoModal{{--produto->id--}}">
                                            <i class="fa fa-pencil text-secondary"></i>
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#excluirProdutoModal{{--produto->id--}}">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <!-- Paginação com e sem filtros -->
                    @if (isset($filters))
                        {{-- $produtos->appends($filters)->links() --}}
                    @else
                        {{-- $produtos->links() --}}
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('painel-adm.produtos.modalsProdutos')

@endsection
