<?php

namespace App\Http\Controllers;

use App;
use App\Models\Counter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::all();
        return view('counters.index', compact('counters'));
    }

    public function create()
    {
    return view('counters.create');
    }

    public function store(Request $request)
    {
    
        
        $request->validate([
            'user_id' => 'nullable',
            'name' => 'nullable',
            'last_name' => 'nullable',
            'phone' => 'nullable|string|unique:counters|max:15', // Cambia `your_table_name` al nombre de tu tabla
            'address' => 'nullable|string|max:255',
            'rfc' => 'nullable|string|unique:counters|max:13', // RFC formato estándar
            'curp' => 'nullable|string|unique:counters|max:18', // CURP formato estándar
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'cp' => 'nullable|string|max:5|regex:/^\d{5}$/', // Código Postal (5 dígitos)
            'regimen' => 'nullable|string|max:50',
            'birthdate' => 'nullable|date|before:today', // Fecha de nacimiento antes de hoy
            'nss' => 'nullable|string|max:11', // NSS formato (11 dígitos)
        ]);
        
        Counter::create($request->all());
        return redirect()->route('counter.index')->with('success', 'Contador creado exitosamente.');
    }

    public function show(Counter $counter)
    {
        return view('counters.show', [
            'counter' => $counter
        ]);
    }

    public function edit(Counter $counter)
    {
        return view('counters.edit', [
            'counter' => $counter
        ]);
    }

    public function update(Request $request, Counter $counter)
    {
        // Validar y actualizar el post
        $request->validate([
            'name' => 'required|string|max:255', // Obligatorio, debe ser una cadena, máximo 255 caracteres
            'last_name' => 'required|string|max:255', // Obligatorio, debe ser una cadena, máximo 255 caracteres
            'email' => 'required|email|max:255', // Obligatorio, formato de correo electrónico, único en la tabla 'users'
            'rfc' => 'required|string|size:13', // Obligatorio, debe tener exactamente 13 caracteres (para México), único
            'curp' => 'required|string|size:18', // Obligatorio, debe tener exactamente 18 caracteres, único
            'birthdate' => 'required|date', // Obligatorio, debe ser una fecha válida, antes de la fecha actual
            'city' => 'required|string|max:255', // Obligatorio, debe ser una cadena, máximo 255 caracteres
        ]);

        $counter->update($request->all());
        return redirect()->route('counter.index')->with('success', 'Contador actualizado exitosamente.');
    }

    public function destroy(Counter $counter)
    {
        $counter = Counter::findOrFail($counter->id);
        $counter->delete();
        return redirect()->route('counter.index')->with('success','Contador Borrado Exitosamente');
    }

}
