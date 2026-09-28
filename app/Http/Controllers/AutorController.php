<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    // Exibe tds os autores
    public function index()
    {
        return response()->json(Autor::all());
    }

    // Criar um novo autor
    public function store(Request $request)
    {
        $autor = Autor::create($request->all());

        return response()->json($autor, 201);
    }

    // Mostrar um autor específico
    public function show($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json([
                'mensagem' => 'Autor não encontrado'
            ], 404);
        }

        return response()->json($autor);
    }

    // Atualizar um autor
    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json([
                'mensagem' => 'Autor não encontrado'
            ], 404);
        }

        $autor->update($request->all());

        return response()->json($autor);
    }

    // Exclui um autor
    public function destroy($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json([
                'mensagem' => 'Autor não encontrado'
            ], 404);
        }

        $autor->delete();

        return response()->json([
            'mensagem' => 'Autor removido com sucesso'
        ]);
    }
}
