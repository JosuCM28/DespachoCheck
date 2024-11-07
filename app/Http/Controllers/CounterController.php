<?php

namespace App\Http\Controllers;

use App;
use App\Models\Counter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::all();
        return view('counters.index', compact('counters'));
    }

    public function create()
    {
        $password = Str::random(10);

        return view('counters.create',compact('password'));

    }

    public function store(Request $request)
    {


        $request->validate([
            'phone' => 'nullable|string|unique:counters|max:15', // Teléfono único, puede estar vacío, máximo 15 caracteres
            'name' => 'required|string|max:255', // Nombre requerido y en formato de texto
            'last_name' => 'required|string|max:255', // Apellido requerido y en formato de texto
            'address' => 'nullable|string|max:255', // Dirección puede estar vacía, máximo 255 caracteres
            'rfc' => 'nullable|string|unique:counters|max:13', // RFC único con formato
            'curp' => 'nullable|string|unique:counters|max:18', // CURP único con formato
            'city' => 'nullable|string|max:100', // Ciudad puede estar vacía, máximo 100 caracteres
            'state' => 'nullable|string|max:100', // Estado puede estar vacío, máximo 100 caracteres
            'cp' => 'nullable|string|max:5|regex:/^\d{5}$/', // Código Postal, máximo 5 dígitos
            'regimen' => 'nullable|string|max:50', // Régimen puede estar vacío, máximo 50 caracteres
            'birthdate' => 'nullable|date|before:today', // Fecha de nacimiento válida y antes de hoy
            'email' => 'nullable|email|unique:users|max:255', // Email requerido, válido, único y máximo 255 caracteres
            'password' => 'nullable|string|min:8', // Contraseña requerida, mínimo 8 caracteres, confirmada
        ]);
        $user = User::create([
            'password' => $request->password,
            'email' => $request->email, 
            'name' => $request->name,  
            'rol' => 'contador',
        ]);
        

        Counter::create([
            'user_id'=> $user->id,
            'phone' => $request->phone ,
            'name' => $request->name,
            'last_name' => $request->last_name ,
            'address' => $request->address,
            'rfc' => $request->rfc,
            'curp' => $request->curp,
            'city' => $request->city,
            'cp' => $request->cp,
            'regimen' => $request->regimen,
            'birthdate' => $request->birthdate,
        ]);
        
        return redirect()->route('counter.index')->with('success', 'Contador creado exitosamente.');
    }

    public function show(Counter $counter )
    {
        return view('counters.show', [
            'counter' => $counter,
            'user' => $counter->user,
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
        return redirect()->route('counter.index')->with('success', 'Contador Borrado Exitosamente');
    }

}
