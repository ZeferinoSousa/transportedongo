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
    <li class="breadcrumb-item active" aria-current="page">Editar Utilizador  {{ $users -> name }}</li>
  </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('user-index')}}">Cancelar</a>
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
  <form action="{{route('user-update',$users->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Nome</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $users -> name }}" required >

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $users -> email }}" required >

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputEmail1" >

    </div>

    
    

    <button type="submit" class="btn btn-success">Confirmar Edição</button>
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