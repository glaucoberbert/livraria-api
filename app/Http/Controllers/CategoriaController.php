<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Exibe tds as categorias
    public function index()
    {
        return response()->json(Categoria::all());
    }

    // Criar uma nova categoria
    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());

        return response()->json($categoria, 201);
    }

    // Mostrar uma categoria específica
    public function show($id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json([
                'mensagem' => 'Categoria não encontrada'
            ], 404);
        }

        return response()->json($categoria);
    }

    // Atualizar uma categoria
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json([
                'mensagem' => 'Categoria não encontrada'
            ], 404);
        }

        $categoria->update($request->all());

        return response()->json($categoria);
    }

    // Exclui uma categoria
    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json([
                'mensagem' => 'Categoria não encontrada'
            ], 404);
        }

        $categoria->delete();

        return response()->json([
            'mensagem' => 'Categoria removida com sucesso'
        ]);
    }
}