<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar o Post <strong>{{$post->title}}</strong></h1>
    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('posts.update', $post->id)}}" method="post">
        <!-- token serve para proteção de ataque csrf enviando campos nulos -->
        @csrf
        @method('PUT') 

        <label for="">Título</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <br><br>
        <label for="">Comentário</label>
        <input type="text" name="content" id="content" value="{{$post->content}}">
        <br><br>
        <button type="submite">Editar</button>
    </form>
</body>
</html>