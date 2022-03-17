<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('index.index');
    }

    public function home(){

        return view('site.home');
    }

    public function cadastrar(){

        return view('site.cadastrar');
    }

    public function sobre(){

        return view('site.sobre');
    }

    public function conta(){

        return view('site.minha_conta');
    }

    

}
