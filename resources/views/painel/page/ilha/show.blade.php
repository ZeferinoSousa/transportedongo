@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
<h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Painel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Secção Santo Antão</li>
        <li class="breadcrumb-item active" aria-current="page">Ilhas</li>
        <li class="breadcrumb-item active" aria-current="page">Ver Informação da Ilha {{$ilhas->titulo}}</li>
    </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('ilha-index')}}">Voltar</a>
<br>
<br>

<div class="card">
    <div class="card-body">
        <strong>Titulo:</strong> {{ $ilhas -> titulo }}
        <br>
        <strong>Imagem:</strong> <br><img src="{{ url('storage/'.$ilhas->imagem) }}" style="max-width:200px" alt="">
        <br>
        <strong>Descricao:</strong> {!! $ilhas -> descricao !!}

        <br>
    </div>
</div>
<form action="{{route('ilha-delete',$ilhas->id)}}" class="form-group" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Apagar Informação</button>
</form>




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');
</script>


@stop