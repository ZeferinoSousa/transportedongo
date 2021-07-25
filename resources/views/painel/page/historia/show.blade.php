@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
    <h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Painel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Secção Empresa</li>
    <li class="breadcrumb-item active" aria-current="page">História</li>
    <li class="breadcrumb-item active" aria-current="page">Detalhes de História - {{ $historias -> titulo }}</li>
  </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('historia-index')}}">Voltar</a>
<br>
<br>

<div class="card">
    <div class="card-body">
    <strong>Titulo:</strong> {{ $historias -> titulo }}
    <br>
    <br>
    <strong>Descricao:</strong> {!! $historias -> descricao !!}
    </div>
</div>
<form action="{{route('historia-delete',$historias->id)}}" class="form-group" method="post">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" >Apagar {{ $historias -> titulo }}</button>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop