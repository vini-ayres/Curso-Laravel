<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = 'Vinicius';
        $idade = 18;
    
        $arr = [1,2,3,4,5];
    
        $nomes = ['Vinicius', 'Maria', 'Joao', 'Pedro'];
    
        return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }
}
