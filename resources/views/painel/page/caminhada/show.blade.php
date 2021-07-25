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
        <li class="breadcrumb-item active" aria-current="page">Opções de Caminhadas</li>
        <li class="breadcrumb-item active" aria-current="page">Detalhes da Caminhada - {{$caminhadas->titulo}}</li>
    </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('caminhada-index')}}">Cancelar</a>
<br>
<br>

<div class="card">
    <div class="card-body">
    <strong>Titulo:</strong> {{ $caminhadas -> titulo }}
    <br>
    <strong>Imagem:</strong> <br><img src="{{ url('storage/'.$caminhadas->imagem) }}" style="max-width:200px" alt="">
    <br>
    <strong>Descricao:</strong> {!! $caminhadas -> descricao !!}
        
        <br>
    </div>
</div>
<form action="{{route('caminhada-delete',$caminhadas->id)}}" class="form-group" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Apagar Imagm</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@section('js')
<script>
    console.log('Hi!');
</script>


@stop