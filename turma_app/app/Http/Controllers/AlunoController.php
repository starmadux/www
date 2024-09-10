<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //

    public function index()
    {
        //
        $alunos = [
            ['id' => 1,
             'nome' => 'Gustavo',
             'idade' => '18',
             'sexo' => 'masculino',
             'cpf' => '066.111.325-09',
             'rg' => '1638541',
             'email' => 'gus@gmail.com',
             'senha' => 'souchato2006',
        ],
            ['id' => 2,
            'nome' => 'Emanuel',
            'idade' => '13',
            'sexo' => 'masculino',
            'cpf' => '014.009.202-02',
            'rg' => '1838542',
            'email' => 'emanu@gmail.com',
            'senha' => 'amominhanamorada',
        ]
    ];

    return view('ListaAluno', compact('alunos'));
}
}