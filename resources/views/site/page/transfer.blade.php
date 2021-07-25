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


        <div class="contatos">
          <div class="container">
            <div class="row">

               @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

              <form class="row g-3" action="{{url('transfer')}}" method="POST">
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
                <div class="col-4">
                  <input type="text" name="numero" class="form-control formulario" id="inputAddress" required placeholder="Número de Pessoas">
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 titulo-transfer">Partida</div>
                    <div class="col-md-4 titulo-transfer">Tipo de Viagem</div>
                    <div class="col-md-4 titulo-transfer">Destino</div>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 titulo-segundo" style="text-align: center; font-size:25px;">Porto Novo</div>
                  <div class="col-md-8">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link transfer active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Full Day</button>
                        <button class="nav-link transfer" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Estrada Nova</button>
                        <button class="nav-link transfer" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Estrada Velha</button>

                      </div>
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          <select class="form-select" name="transfer" size="7" multiple aria-label="multiple select example">
                          <option class="opcao"> Escolha um Destino</option>
                            <option class="opcao" value="Porto Novo - Full Day - Tarrafal (Monte Trigo)">Tarrafal (Monte Trigo)</option>
                            <option class="opcao" value="Porto Novo -Full Day - Chã de Feijoal">Chã de Feijoal</option>
                            <option class="opcao" value="Porto Novo -Full Day - Lajedos">Lajedos</option>
                            <option class="opcao" value="Porto Novo -Full Day - Ribeira das Patas">Ribeira das Patas</option>
                            <option class="opcao" value="Porto Novo -Full Day - Alto Mira">Alto Mira</option>
                            <option class="opcao" value="Porto Novo -Full Day - Ribeira Cruz">Ribeira Cruz</option>
                          </select>
                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                          <select class="form-select" name="transfer" size="25" multiple aria-label="multiple select example">
                            <option class="opcao" > Escolha um Destino</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Pico da Cruz"> Pico da Cruz</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Esponjeiro"> Esponjeiro</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Lagoa"> Lago</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Matinho"> Matinho</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Corda"> Corda</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Ribeira Grande"> Ribeira Grande</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Ribeira da Torre"> Ribeira da Torre</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Ponta do Sol"> Ponta do Sol</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Coculi"> Coculi</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Figueiral"> Figueiral</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - João Afonso"> João Afonso</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Chã das Pedras"> Chã das Pedras</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Boca de Coruja"> Boca de Coruja</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Boca de Ambas Ribeiras"> Boca de Ambas Ribeiras</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Caibros"> Caibros</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - chã de Igraja"> chã de Igraja</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Cruzinha"> Cruzinha</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Pinhão"> Pinhão</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Lombo Branco"> Lombo Branco</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Sinagoga"> Sinagoga</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Paul"> Paul</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Chã João Vaz"> Chã João Vaz</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Cabo de Ribeira"> Cabo de Ribeira</option>
                            <option class="opcao" value="Porto Novo - Estrada Nova - Janela"> Janela</option>
                          </select>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" aria-labelledby="v-pills-messages-tab">
                          <select class="form-select" name="transfer" size="25" multiple aria-label="multiple select example">
                          <option class="opcao" > Escolha um Destino</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Pico da Cruz"> Pico da Cruz</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Esponjeiro"> Esponjeiro</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Lagoa"> Lago</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Matinho"> Matinho</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Corda"> Corda</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Ribeira Grande"> Ribeira Grande</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Ribeira da Torre"> Ribeira da Torre</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Ponta do Sol"> Ponta do Sol</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Coculi"> Coculi</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Figueiral"> Figueiral</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - João Afonso"> João Afonso</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Chã das Pedras"> Chã das Pedras</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Boca de Coruja"> Boca de Coruja</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Boca de Ambas Ribeiras"> Boca de Ambas Ribeiras</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Caibros"> Caibros</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - chã de Igraja"> chã de Igraja</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Cruzinha"> Cruzinha</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Pinhão"> Pinhão</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Lombo Branco"> Lombo Branco</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Sinagoga"> Sinagoga</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Paul"> Paul</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Chã João Vaz"> Chã João Vaz</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Cabo de Ribeira"> Cabo de Ribeira</option>
                            <option class="opcao" value="Porto Novo - Estrada Velha - Janela"> Janela</option>
                          </select>
                        </div>

                      </div>
                    </div>

                  </div>

                </div>
            </div>




            <div class="col-12">
              <button type="submit" class="btn botao-enviar">Reservar Serviço Transfer</button>
            </div>
            </form>
          </div>
        </div>
      </div>



     
    </div>
  </div>
  </div>
</section>



@endsection