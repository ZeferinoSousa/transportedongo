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
    </ol>
</nav>


<a type="button" class="btn btn-warning" href="{{route('info-edit', $infos->id)}}">Abilitar Edição</a>
<br>
<br>
@if(session('mensagem'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="fas fa-check"></i> </strong> {{session('mensagem')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<br>
<div class="container">
    <form>
       
        <div class="form-group">
            <label for="exampleInputEmail1">nome da Empresa</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" value="{{$infos->nome}}" required disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <textarea class="form-control" name="descricao"  rows="3" disabled required>{!! $infos->descricao !!}</textarea>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Imagem da Missao</label>
            <img src="{{ url('storage/'.$infos->missao_imagem) }}" style="max-width:100px" alt="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Missao</label>
            <textarea class="form-control" name="missao"  disabled rows="3" required>{!! $infos->missao !!}</textarea>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Imagem da Valores</label>
            <img src="{{ url('storage/'.$infos->valores_imagem) }}" style="max-width:100px" alt="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Valores</label>
            <textarea class="form-control" name="missao" rows="3" disabled required>{!! $infos->valores !!}</textarea>

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="exampleInputEmail1" value="{{$infos->telefone}}" required disabled>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telemovel 1</label>
            <input type="text" name="telemovel1" class="form-control" id="exampleInputEmail1" value="{{$infos->telemovel1}}" required disabled>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telemovel 2</label>
            <input type="text" name="telemovel2" class="form-control" id="exampleInputEmail1" value="{{$infos->telemovel2}}" required disabled>


        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email 1</label>
            <input type="text" name="email1" class="form-control" id="exampleInputEmail1" value="{{$infos->email1}}" required disabled>


        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email 2</label>
            <input type="text" name="email2" class="form-control" id="exampleInputEmail1" value="{{$infos->email2}}" required disabled>


        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Local</label>
            <input type="text" name="local" class="form-control" id="exampleInputEmail1" value="{{$infos->local}}" required disabled>

        </div>

    </form>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');
</script>


@stop