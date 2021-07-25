@extends('site.layout.layout')

@section('content')

<div class="banner">
    <img src="{{ asset('assets/img/banner.jpg') }}" alt="" class="banner">

</div>

<section class="contatos">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="contato-titulo">Informações de Contato</h5>
          <p class="contato-info"><i class="fas fa-phone"></i> 222 00 00</p>
          <p class="contato-info"><i class="fas fa-mobile-alt"></i> 999 88 77</p>
          <p class="contato-info"><i class="fas fa-mobile-alt"></i> 999 77 88</p>
          <p class="contato-info"><i class="fas fa-envelope-square"></i> dongo@email.com</p>
          <p class="contato-info"><i class="fas fa-envelope-square"></i> dongo@gmail.com</p>
          <p class="contato-info"><i class="fas fa-map-marked-alt"></i> Alto Peixinho, Porto Novo, Santo Antão, cabo verde</p>
        </div>
        <div class="col-md-8">
          <h5 class="contato-titulo">Para mais Informações entre em contato Conosco</h5>
          @if (session('success'))
			    <div class="alert alert-success">
			        {{ session('success') }}
			    </div>
			@endif
          <form class="row g-3" action="{{url('contato')}}" method="POST">
          @csrf
            <div class="col-md-4">

              <input type="text" name="nome" class="form-control formulario" id="inputEmail4" required placeholder="Nome">
            </div>
            <div class="col-md-4">

              <input type="email" name="email" class="form-control formulario" id="inputPassword4" required placeholder="email">
            </div>
            <div class="col-md-4">

              <input type="text" name="telefone" class="form-control formulario" id="inputPassword4" required placeholder="Telefone/telemovel">
            </div>
            <div class="col-12">

              <input type="text" name="assunto" class="form-control formulario" id="inputAddress" required placeholder="Assunto">
            </div>
            <div class="form-floating">
              <textarea class="form-control formulario" name="mensagem" placeholder="Leave a comment here" required id="floatingTextarea2"
                style="height: 150px"></textarea>
              <label for="floatingTextarea2">Mensagem</label>
            </div>


            <div class="col-12">
              <button type="submit" class="btn botao-enviar">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<!--
  <div class="container">
    <div class="row">
      <h5 class="contato-titulo">Perguntas mais frequentes (FAQ)</h5>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Pergunta 1
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Pergunta 2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Pergunta 3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->


@endsection