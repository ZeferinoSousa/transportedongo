<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="font/css/fontawesome.css" rel="stylesheet">
    <link href="{{ asset('assets/font/css/fontawesome.css') }}" rel="stylesheet">

    <link href="font/css/brands.css" rel="stylesheet">
    <link href="{{ asset('assets/font/css/brands.css') }}" rel="stylesheet">

    <link href="font/css/solid.css" rel="stylesheet">
    <link href="{{ asset('assets/font/css/solid.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <link href="{{ asset('assets/dist/css/lightbox.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>Transporte Dongo</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light linha">
        <a class="navbar-brand" href="#">
            <img class="logo animate__animated animate__pulse" src="{{ asset('assets/img/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link nav-links" href="{{url('/')}}">Inicio </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-links" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Empresa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('historia')}}">Breve Historia</a></li>

                        <li><a class="dropdown-item" href="{{url('frota')}}">Frota</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-links" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Serviços
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('caminhada')}}">Opçoes de caminhadas</a></li>
                        <li><a class="dropdown-item" href="{{url('transfer')}}">Transfer</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-links" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Santo Antão
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('ilha')}}">A Ilha</a></li>
                        <li><a class="dropdown-item" href="{{url('parque')}}">Parques Naturais</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-links" href="{{url('galeria')}}">Galeria </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-links" href="{{url('contato')}}">Contatos </a>
                </li>
            </ul>
            <div id="google_translate_element" class="boxTradutor"></div>
            <div class="form-inline my-2 my-lg-0 bandeiras">
                <a href="#" class="bandeira-link"><img class="img-bandeira" src="img/bandeiras/pt.png" alt=""></a>
                <a href="#" class="bandeira-link"><img class="img-bandeira" src="img/bandeiras/en.png" alt=""></a>
                <a href="#" class="bandeira-link"><img class="img-bandeira" src="img/bandeiras/fr.png" alt=""></a>


            </div>
        </div>
    </nav>



    @yield('content')



    <div class="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d933.4536340515316!2d-25.05860790436972!3d17.018148832249093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2scv!4v1620478334663!5m2!1spt-BR!2scv"
            height="450" style="border:0;width: 100%;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="footer-titulo">Localização</h5>
                    <p class="footer-descricao">Alto Peixinho, Porto Novo, Santo Antão, Cabo Verde</p>
                </div>
                <div class="col-md-6">
                    <h5 class="footer-titulo">Estamos aqui tambem</h5>
                    <i class="fab fa-facebook fa-3x margem"></i>
                    <i class="fab fa-instagram fa-3x margem"></i>
                    <i class="fab fa-google-plus-g fa-3x margem"></i>
                    <i class="fab fa-twitter fa-3x margem"></i>
                    <i class="fab fa-whatsapp fa-3x margem"></i>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-titulo">Transporte Dongo</h5>
                    <p class="footer-descricao">A sua satisfação e segurança é o nosso compromisso!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="copy">
                    &copy; Todos os direitos reservados a transportedongo.cv
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
        <script src="dist/js/lightbox-plus-jquery.min.js"></script>
        <script src="{{url('assets/dist/js/lightbox-plus-jquery.min.js')}}"></script>
</body>

</html>