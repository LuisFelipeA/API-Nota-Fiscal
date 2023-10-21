<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Venda;

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

    public function Deletar($id) {
        // Verifique se o cliente existe
        $cliente = Cliente::find($id);
    
        if (!$cliente) {
            return response()->json([
                'message' => 'Cliente não encontrado'
            ], 404);
        }
    
        // Verifique e exclua as vendas relacionadas manualmente
        $vendas = Venda::where('cliente_id', $id)->get();
    
        foreach ($vendas as $venda) {
            $venda->delete();
        }
    
        // Agora, você pode excluir o cliente
        $cliente->delete();
    
        return response()->json([
            'message' => 'Cliente Deletado'
        ], 201);
    }








    // public function Deletar($id) {

    //     Cliente::findOrFail($id)->delete();

    //     return response()->json([
    //         'message' => 'Cliente Deletado'
    //     ], 201);

    // }
}
