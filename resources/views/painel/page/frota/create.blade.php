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
    <li class="breadcrumb-item active" aria-current="page">Frota</li>
    <li class="breadcrumb-item active" aria-current="page">Adicionar Imagens da frota</li>
  </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('frota-index')}}">Cancelar</a>
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
  <form action="{{route('frota-store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Imagem</label>
      <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1">
    </div>
    

    <button type="submit" class="btn btn-success">Adicionar</button>
  </form>
</div>

<br><br><br>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop