<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function Inserir(Request $request) {

        $vendas = Venda::create($request->all());

        return response()->json([
            'message' => 'Venda Criada',
            'Venda' => $vendas
        ], 201);

    }

}


Illuminate\Database\Eloquent\MassAssignmentException: 

Add [valor_nota] to fillable property to allow mass assignment on [App\Models\Venda]. 
in file C:\Users\Felipe\OneDrive\Área de Trabalho\Projetos\Contabilivre\NotasFiscais\vendor\laravel\framework\src\Illuminate\Database\Eloquent\Model.php on line 524
