@extends('site.layout.layout')

@section('content')

<div class="banner">
    <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">

</div>

    <section class="empresa">
        <div class="container">

            <div class="row" >
                <h2 class="titulo">Caminhadas</h2>
                <br> 
                <a class="btn botao-enviar" href="{{url('reserva')}}" style="width: 30%;">Reservar uma Caminhada Aqui</a>
                <br>
            </div>
            <br><br><br>
           
            @foreach($caminhadas as $dado)
            <div class="row">
                <h2 class="titulo-segundo">{{$dado->titulo}}</h2>
                <div class="col-md-4">
                    <img class="sa"  src="{{ url('storage/'.$dado->imagem) }}" alt="">
                </div>
                <div class="col-md-8 branco">
                    <p class="descricao">{!!$dado->descricao!!}</p>

                    
                </div>

            </div>
            @endforeach

            



    </section>


@endsection