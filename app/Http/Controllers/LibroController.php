<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function listarTodos()
    {
        return response()->json(
            Libro::with(['editorial', 'genero', 'pedidos'])->get()
        );
    }

    public function buscarPorId($id)
    {
        $libro = Libro::with([
            'editorial',
            'genero',
            'pedidos'
        ])->find($id);

        if (!$libro) {
            return response()->json([
                'mensaje' => 'Libro no encontrado'
            ], 404);
        }

        return response()->json($libro);
    }

    public function agregar(Request $request)
    {
        $libro = Libro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'editorial_id' => $request->editorial_id,
            'genero_id' => $request->genero_id,
        ]);

        return response()->json($libro, 201);
    }
}
