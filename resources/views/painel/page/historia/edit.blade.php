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
    <li class="breadcrumb-item active" aria-current="page">Editar História - {{ $historias -> titulo }}</li>
  </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('historia-index')}}">Cancelar</a>
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
  <form action="{{route('historia-update',$historias->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" value="{{ $historias -> titulo }}" required >

    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Descrição</label>
      <textarea class="form-control" name="descricao" id="summernote"  rows="20" required>{{ $historias -> descricao }}</textarea>

    </div>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
    

    <button type="submit" class="btn btn-success">Confirmar Edição</button>
  </form>
</div>

<br><br><br>
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



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@stop