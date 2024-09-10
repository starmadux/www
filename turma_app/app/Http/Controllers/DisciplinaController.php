<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    //
    public function index()
    {
        //
        $disciplinas = [
            ['id' => 1,
             'nome' => 'Programação Web',
             'professor' => 'Anderson Seixas',
             'escola' => 'IFRO',
             'qtd_alunos' => '37',
        ],
            ['id' => 2,
            'nome' => 'Banco de Dados',
            'professor' => 'Tenilce Gabriela',
            'escola' => 'IFRO',
            'qtd_alunos' => '37',
        ]
    ];

    return view('ListaDisciplina', compact('disciplinas'));
}
}
