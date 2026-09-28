<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    // Exibe tds os livros
    public function index()
    {
        return response()->json(
            Livro::with(['autor', 'categoria'])->get()
        );
    }

    // Criar um novo livro
    public function store(Request $request)
    {
        $livro = Livro::create($request->all());

        return response()->json($livro, 201);
    }

    // Mostrar um livro específico
    public function show($id)
    {
        $livro = Livro::with(['autor', 'categoria'])->find($id);

        if (!$livro) {
            return response()->json([
                'mensagem' => 'Livro não encontrado'
            ], 404);
        }

        return response()->json($livro);
    }

    // Atualizar um livro
    public function update(Request $request, $id)
    {
        $livro = Livro::find($id);

        if (!$livro) {
            return response()->json([
                'mensagem' => 'Livro não encontrado'
            ], 404);
        }

        $livro->update($request->all());

        return response()->json($livro);
    }

    // Exclui um livro
    public function destroy($id)
    {
        $livro = Livro::find($id);

        if (!$livro) {
            return response()->json([
                'mensagem' => 'Livro não encontrado'
            ], 404);
        }

        $livro->delete();

        return response()->json([
            'mensagem' => 'Livro removido com sucesso'
        ]);
    }
}