<x-app-layout>
<x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minha Conta') }}
      </h2>
</x-slot>
<link rel="stylesheet" type="text/css" href="/css/home.css">
<link rel="stylesheet" type="text/css" href="/css/minha_conta.css">

    <!-- <div class="topo">
      <h3 class="centro text-white">Perfil do Usuário</h3>
    </div> -->
    
    <nav class="form_menu">
      <ul class="menu">
            <li>Minhas Ações >></li>
            <li><a href="{{route('site.projetos')}}">Meus Projetos</a></li>
            <li><a href="{{route('site.cadastrar')}}">Adicionar Novo</a></li>
            <li><a href="#">Avisos</a></li>
        </li>
      </ul>
    </nav>
 
    <section class="container">
      <nav class="nav_campo">
        <div style="margin-left: 5%; margin-top: 20px;">
          <div>
            <h5 class="text-info">Nome:</h5>
            <div class="dados borda">{{ Auth::user()->name }}</div>

            <h5 class="text-info">CPF:</h5>
            <div class="dados borda"></div>

            <h5 class="text-info">E-mail:</h5>
            <div class="dados borda">{{ Auth::user()->email }}</div>

            <h5 class="text-info">Alterar Senha:</h5>
            <input type="password" name="nova_senha" class="dados borda">

            <h5 class="text-info">Nacionalidade:</h5>
            <input type="text" name="nacionalidade" class="dados borda">

            <h5 class="text-info">Telefone:</h5>
            <input type="text" name="telefone" class="dados borda">

            <h5 class="text-info">CEP:</h5>
            <input type="text" name="cep" class="dados borda">

            <h5 class="text-info">Endereço:</h5>
            <input type="text" name="endereco" class="dados borda">

            <h5 class="text-info">Cidade:</h5>
            <input type="text" name="cidade" class="dados borda">

            <a href="logout.php" class="btn btn-outline-success mr-4 mt-1">Atualizar</a>
          </div>
        </div>
      </nav>
    </section>

    <div class="espaco"></div>

</x-app-layout>
