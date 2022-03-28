<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GerenciadorController extends Controller
{
    public function index(){

        $id = Auth::user()->type_id;

        if($id == 2){
            return view('revisor.revisor');
        }
        else if($id == 3){
            return view('gerenciador.gerenciador');
        }else{
            return view('site.home');
        }
    }
}
