<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function Inserir(Request $request)
    {

        $clientes = Cliente::create($request->all());

        return response()->json([
            'message' => 'Cliente Criado',
            'Cliente' => $clientes
        ], 201);


    }

    public function Alterar() {
        echo "Alterar Cliente";
    }

    public function Listar() {
        $clientes = Cliente::all();

        return response()->json($clientes);
    }

    public function ListarId() {
        echo "Listar Cliente por id";
    }

    public function Deletar() {
        echo "Deletar Cliente";
    }
}
