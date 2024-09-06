<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes = [
            ['id' => 1,
             'nome' => 'Ana',
             'cpf' => '066.111.325-09',
             'rg' => '1638541',
             'sexo' => 'outro',
             'data_nascimento' => '26/05/1965',
             'celular' => '69984082712',
             'email' => 'ana@gmail.com',
        ],
            ['id' => 2,
            'nome' => 'Nix',
            'cpf' => '014.009.202-02',
            'rg' => '1838542',
            'sexo' => 'feminino',
            'data_nascimento' => '01/03/2000',
            'celular' => '69985451214',
            'email' => 'nix@gmail.com'
    ]
    ];

    $ClientesList = array_column($clientes, 'name');

    return view('ListaClientes', compact('clientes', 'ClientesList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
