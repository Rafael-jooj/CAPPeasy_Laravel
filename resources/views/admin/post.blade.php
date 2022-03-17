<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    @if(session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif
    <a href="{{ route('posts.create') }}">Criar novo post</a>

    <hr>
    <h1>Página de posts</h1>
    
    <form action="{{route('posts.search')}}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Pesquisar">
        <button type="submit">Filtrar</button>
    </form>

    <!-- Por estar em uma blade é necessario utilizar os @'s -->
    @foreach($posts as $post)
        <p>{{ $post->title }} 
            [  
                <a href="{{route('posts.show', $post->id)}}">Ver Post</a> 
                <a href="{{route('posts.edit', $post->id)}}">Editar</a>
            ]
        </p>
    @endforeach

    <hr>
    {{ $posts->links() }}
</x-app-layout>