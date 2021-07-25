@extends('site.layout.layout')

@section('content')

<div class="banner">
    <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">

</div>

    <section class="empresa">
        <div class="container">
            <div class="row">
                <h2 class="titulo">Nossa Frota</h2>

                @foreach($frotas as $dado)
               <div class="col-md-4"><img src="{{ url('storage/'.$dado->imagem) }}" alt="" class="frota"></div>
               @endforeach
               
            </div>
            <div class="row">
                <div class="col-md-12"><img src="img/transporte/7.jpg" alt="" class="frota"></div>
            </div>

        </div> 
            

    </section>


@endsection