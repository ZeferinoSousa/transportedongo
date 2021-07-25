@extends('site.layout.layout')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        $x = 0;
        ?>
        @foreach($slides as $dado)
        @if ($x == 0)
        <div class="carousel-item active">
            @else
            <div class="carousel-item ">
                @endif
                <?php $x++; ?>

                <img src="{{ url('storage/'.$dado->imagem) }}" class="d-block w-100 slide-img" alt="...">
                <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                    <h5>Transporte Dongo</h5>
                    <p>{{$dado ->slogan}}</p>

                </div>
            </div>
            @endforeach





        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="empresa">
        <div class="container">
            <div class="row">
                <p class="descricao">
                    @foreach($infos as $dado) {!!$dado->descricao!!}} @endforeach
                </p>
            </div>
        </div>
    </section>

    <section class="empresa">
        <div class="container servico">
            <div class="row">
                <div class="col-md-6">
                    @foreach($infos as $dado)
                    <img src="{{ url('storage/'.$dado->missao_imagem) }}" alt="" class="servico-img">
                    @endforeach
                </div>
                <div class="col-md-6 ">
                    <h2 class="titulo">Missao</h2>
                    <p class="servico-texto ">
                        @foreach($infos as $dado) {!!$dado->missao!!} @endforeach
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="paralax">
        <div data-aos="fade-right" data-aos-duration="10000" class="pelicula">A sua satisfação e segurança é o nosso
            compromisso!</div>

    </section>
    <section class="empresa">
        <div class="container servico">
            <div class="row">
                <div class="col-md-4 ">
                    <h2 class="titulo">Visão</h2>
                    <p class="servico-texto ">
                        @foreach($infos as $dado) {!!$dado->valores!!} @endforeach


                    </p>
                </div>
                <div class="col-md-8">
                    @foreach($infos as $dado)
                    <img src="{{ url('storage/'.$dado->missao_imagem) }}" alt="" class="servico-img">
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <section class="sessao team">
        <h2 class="titulo">A Nossa Equipa</h2>
        <img class="linha-titulo" src="linha.png" alt="">
        <div class="container">
            <div class="row">

                @foreach($teams as $dado)
                <div data-aos="fade-up" class="col-md-4">
                    <img class="pessoa" src="{{ url('storage/'.$dado->imagem) }}" alt="">
                    <h3 class="quarto-titulo">{{$dado->nome}}</h3>
                    <p class="quarto-descricao normal-text">{{$dado->funcao}}</p>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endsection