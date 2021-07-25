@extends('site.layout.layout')

@section('content')

<div class="banner">
    <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">

</div>

<section id="section-galeria" class="sessao galeria">
    <div class="container">
        <div class="sessao-titulo">
            <h3 class="titulo">Galeria</h3>
        </div>
        <div class="sessao-conteudo">
            <div class="row">

                @foreach($galerias as $dado)
                <div class="col-md-4" style="margin-bottom: 20px;">
                    <a class="example-image-link" href="{{ asset('storage/'.$dado->imagem) }}" data-lightbox="example-set" data-title="Clique na seta direita para ver as imagens seguintes">
                        <img class="example-image img-responsive galeria-img" src="{{ url('storage/'.$dado->imagem) }}" alt="" />
                    </a>
                </div>
                @endforeach

            </div>

        </div>

    </div>
</section>

@endsection