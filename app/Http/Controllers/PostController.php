<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest()->paginate(4);
        //$posts = Post::get();
       
        return view('admin.post', compact('posts')); //compact passa todas as inf de $posts, mesma coisa de usar um array
    }

    public function create(){
        return view('admin.create');
    }

    public function store(StoreUpdatePost $request){
        Post::create($request->all()); // O all funciona caso o nome dos campos seja igual ao nome da coluna na tabela
        
        return redirect()->route('posts.index');
    }

    public function show($id){
        
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }

        return view('admin.show_post', compact('post'));
    }

    public function remove($id){
        
        if(!$post = Post::find($id))
            return redirect()->route('posts.index');

        $post->delete();

        return redirect()
                ->route('posts.index')
                ->with('message', 'Post Deletado com sucesso');
    }

    public function edit($id){

        if(!$post = Post::find($id))
            return redirect()->back();
        
        return view('admin.edit', compact('post'));
    }

    public function update(StoreUpdatePost $request, $id){

        if(!$post = Post::find($id))
            return redirect()->back();
        
        $post->update($request->all());

        return redirect()
                ->route('posts.index')
                ->with('message', 'Post Alterado com sucesso');
    }

    public function search(Request $request){
        
        $posts = Post::where('title', '=', "%{
            
            $request->search}%")
                        ->orWhere('content', 'LIKE', "%{$request->search}%")
                        ->paginate(); //Se não tiver paginação usar o "get"
        
        return view('admin.post', compact('posts'));

    }

}
