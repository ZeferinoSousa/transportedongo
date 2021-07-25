@extends('site.layout.layout')

@section('content')
<div class="banner">
    <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">

</div>

<section class="empresa">
    <div class="container">

        @foreach($historias as $dado)
        <div class="row">
            <h2 class="titulo">{{$dado->titulo}}</h2>
            <p class="descricao">
                {!!$dado->descricao!!}
            </p>
        </div>
        @endforeach
        


</section>

@endsection