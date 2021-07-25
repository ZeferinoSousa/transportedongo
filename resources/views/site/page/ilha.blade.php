@extends('site.layout.layout')

@section('content')

<div class="banner">
    <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">


</div>

<section class="empresa">
    <div class="container">
        @foreach($ilhas as $dado)
        <div class="row">
            <h2 class="titulo">{{$dado->titulo}}</h2>
            <div class="col-md-5">
                <img src="{{ url('storage/'.$dado->imagem) }}" alt="" class="sa">

            </div>
            <div class="col-md-7">

                <p class="descricao">
                    {!!$dado->descricao!!}
                </p>
            </div>
        </div>
        @endforeach
        <br>
        

</section>


@endsection