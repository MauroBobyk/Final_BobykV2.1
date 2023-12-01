<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
{
    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'matricula' => 'required|string',
            'especialidad' => 'required|string',
            'fecha_ingreso' => 'required|date',
        ]);

        Medico::create($request->all());

        return redirect()->route('medicos.create')->with('success', 'Médico creado exitosamente.');
    }
}