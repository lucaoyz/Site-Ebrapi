@extends('layouts.user_type.auth')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

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

<form action="{{ route('noticias.store.fotoNoticias', $noticia->id) }}" method="POST" enctype="multipart/form-data">
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

            <label for="fn_imagem" class="form-label">Imagem principal da notícia {{$noticia->no_titulo}}</label>
            <input type="file" name="fn_imagem[]" class="form-control" id="fn_imagem" accept=".jpeg,.png,.jpg,.gif,.svg"><br>

            <label for="fn_imagem" class="form-label">Imagens adicionais da notícia {{$noticia->no_titulo}}</label>
            <div class="increment">
              <div class="clone hide">
                <div class="control-group input-group" style="margin-top:10px; align-items: flex-start">
                  <input type="file" name="fn_imagem[]" class="form-control" accept=".jpeg,.png,.jpg,.gif,.svg" id="fn_imagem">
                  <button class="btn btn-danger" type="button">Remover imagem</button>
                </div>
              </div>
            </div>
        </div><br>
        <button class="btn btn-success" type="button">Adicionar mais imagens</button>
    </div>

    <div class="card-footer">
        <button class="btn btn-primary" style="background-image: linear-gradient(310deg,#008352,#008352);" type="submit">Finalizar</button>

        <a href="{{route('noticias')}}" class="btn btn-secondary">Voltar para as notícias</a>
    </div>

</form>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection
