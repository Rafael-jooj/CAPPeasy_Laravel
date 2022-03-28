<?php

namespace App\Http\Controllers;

use App\Models\Projetos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //conseguir pegar dados do usuario


class ProjetosController extends Controller
{
    public function index(){

        // $projetos = Projetos::get(); Busca sem filtro
        $id = Auth::user()->id;
        $projetos = Projetos::get()
                        ->where('id_user', '=', $id);

        return view('site.listaprojetos', compact('projetos'));
    }

    public function store(Request $request){

        $projeto = Projetos::create($request->all());

        $projetos = Projetos::get()->where('id_user', '=', Auth::user()->id);

        return view('site.listaprojetos', compact('projetos'));
    }

    public function detalhes($id){

        $projeto = Projetos::find($id);
        if(!$projeto){
            $projetos = Projetos::get()->where('id_user', '=', Auth::user()->id);
            return view('site.listaprojetos', compact('projetos'));
        }

        return view('site.abaprojeto', compact('projeto'));
    }

    public function projetosRevisor(){
        $projetos = Projetos::get();

        return view('revisor.projetosRevisor', compact('projetos'));
    }

    public function projetosGerenciador(){
        $projetos = Projetos::get();

        return view('gerenciador.projetosGerenciador', compact('projetos'));
    }

}
