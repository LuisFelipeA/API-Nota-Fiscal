<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function Inserir() {
        echo "Inserir Cliente";
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
