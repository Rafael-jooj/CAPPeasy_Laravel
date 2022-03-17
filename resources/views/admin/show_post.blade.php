<h1>Detalhes do {{ $post->title }}</h1>

<ul>
    <li>{{ $post->title }}</li>
    <li>{{ $post->content }}</li>
</ul>

<form action="{{route('posts.remove', $post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Remover {{$post->title}}</button>
</form>