<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pedidos = [
            [
                'id' => 1,
                'cod_ped' => 007,
                'cliente' => 'Ana',
                'produto' => 'pulseira',
                'quant' => 2,
                'valor_ped' => 30.99,
                'valor_desc' => 0.99
            ],
            [
                'id' => 2,
                'cod_ped' => 222,
                'cliente' => 'Nix',
                'produto' => 'Bolsa',
                'quant' => 1,
                'valor_ped' => 79.99,
                'valor_desc' => 9.99
            ]
            ];

            return view('ListarPedidos', compact('pedidos'));
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
