<x-app-layout>
<x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Descrição do Projeto') }}
      </h2>
</x-slot>
<link rel="stylesheet" type="text/css" href="/css/abaprojeto.css">
<section>
    <nav class="nav_tabs">
      <ul>
        <li> 
          <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
          <label for="tab1" id="tabela1">Descrição</label>
          <div class="content">
            <article>
              <h4 class="text-info">Descrição do Projeto</h4><br>
              <form>
              <div>
                <h5 class="text-info">Título:</h5>
                <div class="dados borda">{{$projeto->titulo}}</div>

                <h5 class="text-info">Instituição:</h5>
                <div class="dados borda">{{$projeto->instituicao}}</div>

                <h5 class="text-info">Grupo de Pesquisa:</h5>
                <div class="dados borda">{{$projeto->grupo}}</div>

                <h5 class="text-info">Grande Área do Conhecimento (CNPq):</h5>
                <div class="dados borda">{{$projeto->grande_area}}</div>

                <h5 class="text-info">Áreas Secundarias:</h5>
                <div class="dados borda">{{$projeto->area_sec}}</div>

                <h5 class="text-info">Palavras-chave:</h5>
                <div class="dados borda">{{$projeto->palavras_chave}}</div>

                <h5 class="text-info">Início Previsto:</h5>
                <div class="dados borda">{{$projeto->inicio}}</div>

                <h5 class="text-info">Término Previsto:</h5>
                <div class="dados borda">{{$projeto->termino}}</div>

                <h5 class="text-info">Envolve pesquisa com seres humanos?</h5>
                <div class="dados borda">{{$projeto->pesq_humanos}}</div>

                <h5 class="text-info">Envolve pesquisa com animais?</h5>
                <div class="dados borda">{{$projeto->pesq_animais}}</div>

                <h5 class="text-info">Local de Execução na Rede:</h5>
                <div class="dados borda">{{$projeto->local}}</div>

                <h5 class="text-info">O Projeto Tem Financiamento?</h5>
                <div class="dados borda">{{$projeto->financiamento}}</div>

                <h5 class="text-info">Valor Total:</h5>
                <div class="dados borda">{{$projeto->valor}}</div>

                <h5 class="text-info">Instituição de Fomento:</h5>
                <div class="dados borda">{{$projeto->instituicao}}</div>

                <h5 class="text-info">Objetivos(Gerais e Específicos):</h5>
                <div class="dados borda"><p>{{$projeto->objetivos}}</p></div>
              </div>

              </form>

            </article>
          </div>
        </li>
        <li>
        <input type="radio" name="tabs" class="rd_tabs" id="tab2">
        <label for="tab2" id="tabela2">Equipe</label>
        <div class="content">
          <article>
              <h4 class="text-info">Participantes</h4><br>
              <div class="form_equipe">
                  <div style="padding: 14px; float: left;">
                      <img src="imagens/user.png" alt="" width="50px" height="50px">
                  </div>
                  <div style="padding: 10px; font-size: 15pt;">
                      
                      <h5>Coordenador</h5>
                  </div>
              </div><br>

              <!-- <div class="form_equipe">
                  <div style="padding: 14px; float: left;">
                      <img src="imagens/user.png" alt="" width="50px" height="50px">
                  </div>
                  <div style="padding: 10px; font-size: 15pt;">
                      <h5>Nome do usuário</h5>
                      <h5>cargo</h5>
                  </div>
              </div> -->

          </article>
        </div>
      </li>
    </ul>
  </nav>
</section>
</x-app-layout>