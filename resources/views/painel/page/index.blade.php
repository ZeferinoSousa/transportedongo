@extends('adminlte::page')

@section('title', 'Painel | Transporte Dongo')

@section('content_header')
<h1>Painel de Administração | Transporte Dongo</h1>
@stop

@section('content')
<p>Painel para alteração do conteudo do site transportedongo.cv</p>
<p>Qualquer problema entre em contato com o desenvolvedor do Site:</p>
<ul>
    <li>+238 9500887 / <i class="fab fa-whatsapp"></i> <i class="fab fa-viber"></i></li>
    <li><a href="https://web.facebook.com/Finy6"><i class="fab fa-facebook-messenger"></i> Messenger do facebook</a></li>
    <li>zeferinosousa.6@gmail.com</li>
    <li>mediasitlda@gmail.com</li>
    <br>
    <br>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
         Para um bom desempenho do site, todas as Imagens devem ter no maximo <strong>512kbs</strong>  <BR>
         As Imagens acima de 512kbs sao bloqueadas pelo sistema
    </div>
    <br>
    <a href="{{url('/')}}" target="_blank" class="btn btn-primary btn-lg"  >Ir para o Site</a>
</ul>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop