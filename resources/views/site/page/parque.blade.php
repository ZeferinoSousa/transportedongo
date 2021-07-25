@extends('site.layout.layout')

@section('content')

<div class="banner">
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">


    </div>

    <section class="empresa">
        <div class="container">

            <div class="row">
                <h2 class="titulo">Parques Naturais</h2>
            </div>
            @foreach($parques as $dado)
            <div class="row">
                <h2 class="titulo-segundo">{{$dado->titulo}}</h2>
                <div class="col-md-4">
                    <img class="sa" src="{{ url('storage/'.$dado->imagem) }}" alt="">
                </div>
                <div class="col-md-8">
                    <p class="descricao">
                    {!!$dado->descricao!!}

                    </p>
                </div>

            </div>
            <br><br>
            @endforeach

    </section>





@endsection