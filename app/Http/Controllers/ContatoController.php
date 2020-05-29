<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            ['nome' => 'Maria', 'telefone' => '4894984'],
            ['nome' => 'Pedro', 'telefone' => '4984894'],
        ];


        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return 'Esse é o criar do ContatoController';
    }

    public function editar()
    {
        return 'Esse é o editar do ContatoController';
    }
}
