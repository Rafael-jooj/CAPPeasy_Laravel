<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body> 

    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
          <a href="home.php"><img src="imagens/logo2.png" width="220px" height="44px"> </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('site.home')}}" class="nav-link text-light ml-3">CAPPeasy Home</a></li>
            <li class="nav-item"><a href="{{route('site.cadastrar')}}" class="nav-link text-light ml-3">Cadastrar Projeto</a></li>
            <li class="nav-item"><a href="{{route('site.sobre')}}" class="nav-link text-light ml-3">Quem Somos</a></li>
            <li class="nav-item"><a href="{{route('site.conta')}}" class="nav-link text-light ml-3 mr-4">Minha Conta</a></li>
            <li class="nav-item text-light" style="margin-right: 15px; margin-top: 10px;">Olá Usuário</li>
            <li class="nav-item"><a href="" class="btn btn-outline-light mr-4 mt-1">Sair</a></li>
            <li class="nav-item"><img src="imagens/fesp.png" width="100px" height="50px"></li>
          </ul>
        </div>
      </div>
      </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <div class="espaco"></div>
    <hr><br>
        <div class="container" style="margin-top: 10px">
            <div class="row">
                <div class="col-md-2">
                    <img src="imagens/fesp.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <p>
                        <strong>Fundação Escola de Saúde Pública de Palmas</strong><br>
                        Avenida LO 09, HM 06, Lote 11, s/n - Plano Diretor Sul, <br>
                        Palmas - TO, CEP 77015-611
                    </p>
                    <p>
                        <strong>Telefone(s):</strong>
                        <a href="tel:63 3212-7904" target="_blank" onclick="open('tel:63 3212-7904')">(63) 3212-7904 / </a>
                        <a href="tel:63 3212-7905" target="_blank" onclick="open('tel:63 3212-7905')">(63) 3212-7905 / </a>
                        <a href="tel:63 3212-7906" target="_blank" onclick="open('tel:63 3212-7906')">(63) 3212-7906 / </a>
                        <a href="tel:63 3212-7907" target="_blank" onclick="open('tel:63 3212-7907')">(63) 3212-7907</a>
                    </p>
                    <p>
                        <strong>E-mail:</strong>
                        <a href="mailto:fesppalmas@gmail.com" target="_blank" onclick="open('mailto:fesppalmas@gmail.com')">fesppalmas@gmail.com</a>,
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="https://fesp.palmas.to.gov.br/images/logo_prefeitura_preferencial-01.png" alt="Logo FESP" class="img-fluid float-right" style="width: 80%">
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>