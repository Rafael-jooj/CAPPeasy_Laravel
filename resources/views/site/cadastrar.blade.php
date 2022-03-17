<x-app-layout>
<x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Novo Projeto') }}
      </h2>
</x-slot>
<link rel="stylesheet" type="text/css" href="/css/projetos.css">

<section>
  <div class="principal">
    <br><p style="margin-left: 5%;">Descrição do Projeto</p><br>
  </div>

  <div class="container principal">
      <div style="margin-left: 5%; margin-top: 20px;">
      
      <form method="post" action="{{route('projetos.store')}}">
      @csrf
      <div class="text-info">
        <h5>Título:</h5>
        <input type="text" name="titulo" class="dados borda">

        <h5>Instituição:</h5>
        <input type="text" name="instituicao" class="dados borda">

        <h5>Grupo de Pesquisa:</h5>
        <select class="dados borda" name="grupo">
          <option value="1"></option>
          <option value="Agricultura Familiar">Agricultura Familiar</option>
          <option value="Cidade e Meio Ambiente">Cidade e Meio Ambiente</option>
          <option value="Arquivo e Cultura Escolar">Arquivo e Cultura Escolar</option>
          <option value="Ecologia e Meio Ambiente">Ecologia e Meio Ambiente</option>
          <option value="Física Aplicada">Física Aplicada</option>
          <option value="Fisiologia Molecular de Plantas">Fisiologia Molecular de Plantas</option>
        </select>

        <h5>Grande Área do Conhecimento (CNPq):</h5>
        <input type="text" name="grande_area" class="dados borda">

        <h5>Áreas Secundarias:</h5>
        <input type="text" name="area_sec" class="dados borda">

        <h5>Palavras-chave:</h5>
        <input type="text" name="palavras_chave" class="dados borda">

        <h5>Início Previsto:</h5>
        <input type="date" name="inicio" class="dados borda">

        <h5>Término Previsto:</h5>
        <input type="date" name="termino" class="dados borda">

        <h5>Envolve pesquisa com seres humanos?</h5>
        <select class="dados borda" name="pesq_humanos">
          <option value="Não">NÃO</option>
          <option value="Sim">SIM</option>
        </select>

        <h5>Envolve pesquisa com animais?</h5>
        <select class="dados borda" name="pesq_animais">
          <option value="Não">NÃO</option>
          <option value="Sim">SIM</option>
        </select>

        <h5>Local de Execução na Rede:</h5>
        <input type="text" name="local" class="dados borda">

        <h5>O Projeto Tem Financiamento?</h5>
        <select class="dados borda" name="financiamento">
          <option value="Não">NÃO</option>
          <option value="Sim">SIM</option>
        </select>

        <h5>Valor Total:</h5>
        <input type="number" min="0.00" max="10000.00" step="0.01" name="valor" class="dados borda">

        <h5>Instituição de Fomento:</h5>
        <input type="text" name="instituicao_fomento" class="dados borda">

        <h5>Objetivos(Gerais e Específicos):</h5>
        <textarea type="text" name="objetivos" class="dados-area borda"></textarea><br>

        <input type="hidden" value="{{Auth::user()->id}}" name="id_user">

      <div class="input-group-append">
        <button type="submit" class="btn btn-outline-primary mr-4 mt-1"> Criar Projeto </button>
      </div>
      </form>
      <div class="espaco"></div>
      </div>
    </div>
          
</section>

</x-app-layout>