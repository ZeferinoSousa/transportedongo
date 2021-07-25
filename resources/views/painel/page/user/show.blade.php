@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
    <h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Painel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Secção Utilizador</li>
    <li class="breadcrumb-item active" aria-current="page">Ver Detalhes de Utilizador</li>
  </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('user-index')}}">Voltar</a>
<br>
<br>

<div class="card">
    <div class="card-body">
    <strong>Titulo:</strong> {{ $users -> name }}
    <br>
    <br>
    <strong>Emial:</strong> {!! $users -> email !!}
    <br>
    <br>
    <strong>Password:</strong> ********
    </div>
</div>
<form action="{{route('user-delete',$users->id)}}" class="form-group" method="post">
@csrf
@method('DELETE')
@if($users->id==1)
<button type="submit" class="btn btn-danger disabled" >Apagar {{ $users -> name }}</button>
@else
<button type="submit" class="btn btn-danger" >Apagar {{ $users -> name }}</button>
@endif
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop