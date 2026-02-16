<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\View\View;
use Illuminate\Http\Response;

class RecetaController extends Controller
{
    public function index(): View
    {
        $recetas = Receta::orderBy('created_at', 'desc')->get();

        return view('recetas.index', [
            'recetas' => $recetas,
        ]);
    }

    public function show(int $id): View
    {
        $receta = Receta::findOrFail($id);

        return view('recetas.show', [
            'receta' => $receta,
        ]);
    }
}
