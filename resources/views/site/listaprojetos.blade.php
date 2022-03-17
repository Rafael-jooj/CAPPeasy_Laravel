<x-app-layout>
<x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Projetos') }}
      </h2>
</x-slot>

<link rel="stylesheet" type="text/css" href="/css/listaprojetos.css">

<div class="container" style="height: 600px;">
<br>    
<table border="1" width="1100px">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Início Previsto</th>
            <th>Término Previsto</th>
            <th>Coordenador</th>
            <th>Situação</th>
            <th>Ação</th>
        </tr>
        @foreach($projetos as $projeto)
        <tr>
            <td><p>{{$projeto->id}}</p></td>
            <td><p>{{$projeto->titulo}}</p></td>
            <td><p>{{$projeto->inicio}}</p></td>
            <td><p>{{$projeto->termino}}</p></td>
            <td><p>{{Auth::user()->name}}</p></td>
            <td><p>Criado</p></td> 
            <td><p><a href="{{route('site.detalhes', $projeto->id)}}">Exibir</a></p></td>
        </tr>
        @endforeach
         
    </table>
</div>
</x-app-layout>
