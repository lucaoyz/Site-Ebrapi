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
                            <h5 class="mb-0">Todas as imagens adicionais do produto</h5>
                        </div>
                        <a href="{{route('produtos.create.fotoProduto', $produto->id)}}" class="btn bg-gradient-primary" type="button">+&nbsp; Adicionar imagem</a>
                    </div>
                    <a href="{{route('produtos')}}" class="btn btn-secondary" type="button">Voltar para tela de produtos</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Imagem
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fotoProdutos as $fotoProduto)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$fotoProduto->id}}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/fotosNoticias/{{$fotoProduto->fp_imagem}}" width="100rem;"><br>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="mx-3" data-bs-toggle="modal" data-bs-target="#editarFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}">
                                            <i class="fa fa-pencil text-secondary"></i>
                                        </a>
                                        <a href="" class="mx-3" data-bs-toggle="modal" data-bs-target="#excluirFotoProdutoModal{{$produto->id}}{{$fotoProduto->id}}">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <!-- Paginação com e sem filtros -->
                    @if (isset($filters))
                        {{ $fotoProdutos->appends($filters)->links() }}
                    @else
                        {{ $fotoProdutos->links() }}
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@include('painel-adm.produtos.modalsFotoProdutos')

@endsection
