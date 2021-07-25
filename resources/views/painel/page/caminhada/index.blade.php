@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
    <h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')
    
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Painel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Secção Serviços</li>
    <li class="breadcrumb-item active" aria-current="page">Caminhadas</li>
  </ol>
</nav>

<a type="button" class="btn btn-success" href="{{route('caminhada-create')}}">Adicionar Caminhada</a>
<br>
<br>
@if(session('mensagem'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="fas fa-check"></i> </strong> {{session('mensagem')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<br>
@if(session('apagado'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><i class="fas fa-check"></i> </strong> {{session('apagado')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Imagem</th>
      <th scope="col">Data de Introduçao</th>
      <th scope="col">Accao</th>
    </tr>
  </thead>
  <tbody>
    @foreach($caminhadas as $dado)
    <tr>
      <th scope="row">{{$dado->id}}</th>
      <td>{{$dado->titulo}}</td>
      <td>
      <img src="{{ url('storage/'.$dado->imagem) }}" style="max-width:50px" alt="">
      </td>
      <td>{{$dado->created_at}}</td>
      <td>
        <a href="{{ route('caminhada-show',$dado->id)}}" class="btn btn-info">Ver</a>
        <a href="{{ route('caminhada-edit',$dado->id)}}" class="btn btn-warning">Editar</a>

      </td>
    </tr>
    @endforeach

  </tbody>
</table>
<div class="card-footer">
  {!! $caminhadas->links() !!}
</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop