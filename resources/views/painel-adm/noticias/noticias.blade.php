@extends('layouts.user_type.auth')

@section('content')
<div>
    @if(session('success'))
   <div class="alert alert-success text-white">
      {{ session('success') }}
   </div>
 @endif
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todas as notícias</h5>
                        </div>
                        <a href="{{route('noticias.createNoticias')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; adicionar notícia</a>
                    </div><br>
                    <a href="{{route('categoria')}}" class="btn bg-gradient-secondary btn-sm mb-0" type="button">Visualizar categorias</a>
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
                                        Imagens
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Titulo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Corpo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Categoria
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Data
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticias as $noticia)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$noticia->id}}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <i class="fa fa-picture-o" style="margin-left: 0.5rem;" aria-hidden="true"></i>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$noticia->no_titulo}}</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="text-xs font-weight-bold mb-0" data-bs-toggle="modal" data-bs-target="#corpoNoticia{{$noticia->id}}">Clique aqui para visualizar o corpo da notícia</a>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$noticia->ca_nome}}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$noticia->no_data->format('d/m/Y')}}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar">
                                            <i class="fa fa-pencil text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <!-- Paginação com e sem filtros -->
                    @if (isset($filters))
                        {{ $noticias->appends($filters)->links() }}
                    @else
                        {{ $noticias->links() }}
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('painel-adm.noticias.modals.modalsNoticias')

@endsection
