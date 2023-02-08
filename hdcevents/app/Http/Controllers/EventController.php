<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Marco";
        $idade = 31;
        $arr = [1,2,56,32,6,5];
        $nomes = ['antoni', 'xulia', 'rodrigo', 'leonel', 'rayara'];
        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'programador',
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
