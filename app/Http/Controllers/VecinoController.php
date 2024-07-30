<?php

namespace App\Http\Controllers;

use App\Models\Vecino;
use Illuminate\Http\Request;

class VecinoController extends Controller
{
    // Mostrar el formulario para añadir un nuevo vecino
    public function create()
    {
        return view('vecinos.create'); // Asegúrate de que 'vecinos.create' sea la vista correcta
    }

    // Procesar el formulario para añadir un nuevo vecino
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Escalera' => 'nullable|string|max:10',
            'Piso' => 'nullable|integer',
            'Puerta' => 'nullable|string|max:10',
            'id_comunidad' => 'required|exists:comunidades,id_comunidad',
        ]);

        Vecino::create($request->all());

        return redirect()->route('vecinos.index');
    }

    // Mostrar la lista de vecinos
    public function index()
    {
        $vecinos = Vecino::all();
        return view('vecinos.index', compact('vecinos')); // Asegúrate de que 'vecinos.index' sea la vista correcta
    }
}
