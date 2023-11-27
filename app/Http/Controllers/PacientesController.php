<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{
    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_apellido' => 'required',
            'dni' => 'required|unique:pacientes,dni|numeric',
            'edad' => 'required|numeric',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required|date',
        ]);

        // Verificar si ya existe un paciente con el mismo DNI
       /*  $dniExistente = Paciente::where('dni', $request->input('dni'))->exists(); */

        if (Paciente::create($request->all())) {
            return redirect()->route('PanelPacientes')->with('success', 'Paciente creado exitosamente.');
        }else
        { return redirect()->route('PanelPacientes')->with('error', 'la cagaste mal.');
        }

     /*    Paciente::create($request->all());
            return redirect()->route('PanelPacientes')->with('success', 'Paciente creado exitosamente.'); */
    }
}