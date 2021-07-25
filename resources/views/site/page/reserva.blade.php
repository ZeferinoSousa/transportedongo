@extends('site.layout.layout')

@section('content')


<div class="banner">
    <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">


</div>



<section class="contatos">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h5 class="contato-titulo">Venha conhecer Santo Antão</h5>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <form class="row g-3" action="{{url('reserva')}}" method="POST">
                @csrf
                    <div class="col-md-6">

                        <input type="text" name="nome" class="form-control formulario" id="inputEmail4" required placeholder="Nome">
                    </div>
                    <div class="col-md-6">

                        <input type="email" name="email" class="form-control formulario" id="inputPassword4" required placeholder="email">
                    </div>
                    <div class="col-md-6">

                        <input type="text" name="telefone" class="form-control formulario" id="inputPassword4" required placeholder="Telefone/telemovel">
                    </div>
                    <div class="col-md-6">

                        <input type="text" name="numero" class="form-control formulario" id="inputEmail4" required placeholder="Numero de Pessoas">
                    </div>
                    <div class="col-12">

                        <select class="form-select formulario" name="caminhada" aria-label="Default select example">
                            <option selected>Selecione a Caminhada</option>
                            <option value="Ponta do Sol – Cruzinha">Ponta do Sol – Cruzinha</option>
                            <option value="Boca de Ambas Ribeiras – Cruzinha">Boca de Ambas Ribeiras – Cruzinha</option>
                            <option value="Alto Mira – Chã de Morte">Alto Mira – Chã de Morte</option>
                            <option value="Corda – Coculi">Corda – Coculi</option>
                            <option value="Cova - Paúl">Cova - Paúl</option>
                            <option value="Espongeiro - Lagoa - Matinho - Caibros">Espongeiro - Lagoa - Matinho - Caibros</option>
                            <option value="Espongeiro - Lagoa - Matinho - Chã de Pedras">Espongeiro - Lagoa - Matinho - Chã de Pedras</option>
                            <option value="Pico da Cruz – Paúl">Pico da Cruz – Paúl</option>
                            <option value="Cha Pedras - Coculi">Cha Pedras - Coculi</option>
                            <option value="Cha De Mato- Ribeira Da Torre">Cha De Mato- Ribeira Da Torre</option>
                            <option value="Paúl - Pico de Santo António">Paúl - Pico de Santo António</option>
                            <option value="Pinhão - Lombo Branco - Sinagoga">Pinhão - Lombo Branco - Sinagoga</option>

                        </select>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control formulario" name="obs" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                        <label for="floatingTextarea2">OBS</label>
                    </div>


                    <div class="col-12">
                        <button type="submit" class="btn botao-enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection