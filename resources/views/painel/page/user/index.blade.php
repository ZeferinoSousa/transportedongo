@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
    <h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')
    
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Painel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Secção Utilizadores</li>
  </ol>
</nav>

<a type="button" class="btn btn-success" href="{{route('user-create')}}">Adicionar Utilizador</a>
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
      <th scope="col">Nome</th>
      <th scope="col">Data de Introduçao</th>
      <th scope="col">Acçao</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $dado)
    <tr>
      <th scope="row">{{$dado->id}}</th>
      <td>{{$dado->name}}</td>
      <td>{{$dado->created_at}}</td>
      <td>
        <a href="{{ route('user-show',$dado->id)}}" class="btn btn-info">Ver</a>
        @if($dado->id == 1  )
        <a href="{{ route('user-edit',$dado->id)}}"  disabled class="btn btn-warning disabled">Editar</a>
        @else
        <a href="{{ route('user-edit',$dado->id)}}"  disabled class="btn btn-warning">Editar</a>
        @endif
        

      </td>
    </tr>
    @endforeach

  </tbody>
</table>
<div class="card-footer">
  {!! $users->links() !!}
</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop