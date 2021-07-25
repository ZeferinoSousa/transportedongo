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
    <li class="breadcrumb-item active" aria-current="page">Nossa Equipa</li>
    <li class="breadcrumb-item active" aria-current="page">Editar Membro da Equipa</li>
  </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('team-index')}}">Cancelar</a>
<br>
@if($errors->any())
<br>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    @foreach($errors->all() as $erro)
    <strong><i class="fas fa-check"></i> </strong> {{$erro}} <br>
    @endforeach

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<br>

<div class="container">
    <form action="{{route('team-update',$teams->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Titulo</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" value="{{$teams->nome}}" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Imagem</label>
            <input type="file" name="imagem" class="form-control-file"  id="exampleFormControlFile1">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <input type="text" name="funcao" class="form-control" id="exampleInputEmail1" value="{{$teams->funcao}}" required>

        </div>


        <button type="submit" class="btn btn-success">Editar</button>
    </form>
</div>

<br><br><br>




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@section('js')
<script>
    console.log('Hi!');
</script>


@stop