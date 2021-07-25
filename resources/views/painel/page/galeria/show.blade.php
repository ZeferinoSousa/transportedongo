@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
    <h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Painel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Secção Galeria</li>
    <li class="breadcrumb-item active" aria-current="page">Galeria</li>
    <li class="breadcrumb-item active" aria-current="page">Detalhes da Imagem da Galeria</li>
  </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('galeria-index')}}">Voltar</a>
<br>
<br>

<div class="card">
    <div class="card-body">
    <strong>Imagem:</strong> <br><img src="{{ url('storage/'.$galerias->imagem) }}" style="max-width:400px" alt="">
    <br>
    </div>
</div>
<form action="{{route('galeria-delete',$galerias->id)}}" class="form-group" method="post">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" >Apagar Imagm</button>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop