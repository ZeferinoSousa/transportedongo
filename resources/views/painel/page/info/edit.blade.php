@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
<h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Painel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Secção Informações do Site</li>
        <li class="breadcrumb-item active" aria-current="page">Informação</li>
        <li class="breadcrumb-item active" aria-current="page">Editar Informaçoes do Site</li>
    </ol>
</nav>


<a type="button" class="btn btn-info" href="{{route('info-show',$infos->id)}}">Cancelar</a>
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
    <form action="{{route('info-update',$infos->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Nome da Empresa</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" value="{{$infos->nome}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <textarea class="form-control" name="descricao" id="summernote" rows="10" required>{{$infos->descricao}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Imagem da Missão</label>
            <input type="file" name="missao_imagem" class="form-control-file"  id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Missao</label>
            <textarea class="form-control" name="missao" id="summernote2" rows="10" required>{{$infos->missao}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Imagem da Valores</label>
            <input type="file" name="valores_imagem" class="form-control-file"  id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Valores</label>
            <textarea class="form-control" name="valores" id="summernote3" rows="10" required>{{$infos->missao}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="exampleInputEmail1" value="{{$infos->telefone}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telemovel 1</label>
            <input type="text" name="telemovel1" class="form-control" id="exampleInputEmail1" value="{{$infos->telemovel1}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telemovel 2</label>
            <input type="text" name="telemovel2" class="form-control" id="exampleInputEmail1" value="{{$infos->telemovel2}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email 1</label>
            <input type="text" name="email1" class="form-control" id="exampleInputEmail1" value="{{$infos->email1}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email 2</label>
            <input type="text" name="email2" class="form-control" id="exampleInputEmail1" value="{{$infos->email2}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Local</label>
            <input type="text" name="local" class="form-control" id="exampleInputEmail1" value="{{$infos->local}}" required>
        </div>

        
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
                $('#summernote2').summernote();
                $('#summernote3').summernote();
            });
        </script>
    <button type="submit" class="btn btn-primary">Guardar Alterações</button>
    </form>
</div>

<br><br><br>




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@stop