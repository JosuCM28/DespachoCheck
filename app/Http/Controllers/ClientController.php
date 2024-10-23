<?php

namespace App\Http\Controllers;
use App\Models\Counter;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $counters = Counter::all();


        return view('clients.create', compact('counters'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'counter_id' => 'required|exists:counters,id', // Requiere que el contador exista en la tabla 'counters'
            'name' => 'required|string|max:255', // Obligatorio, cadena de texto, máximo 255 caracteres
            'last_name' => 'required|string|max:255', // Obligatorio, cadena de texto, máximo 255 caracteres
            'email' => 'required|email|max:255|unique:clients,email', // Obligatorio, formato de email, máximo 255 caracteres, único en la tabla 'clients'
            'phone' => 'required|string|max:15|unique:clients,phone', // Obligatorio, debe ser único, máximo 15 caracteres
            'address' => 'required|string|max:255', // Obligatorio, cadena de texto, máximo 255 caracteres
            'city' => 'nullable|string|max:255', // Opcional, cadena de texto, máximo 255 caracteres
            'state' => 'nullable|string|max:255', // Opcional, cadena de texto, máximo 255 caracteres
            'cp' => 'nullable|string|size:5', // Opcional, longitud exacta de 5 caracteres (asumiendo que es código postal)
            'birthdate' => 'nullable|date|before:today', // Opcional, debe ser una fecha válida y anterior a hoy
            'status' => 'required|in:active,inactive', // Obligatorio, debe ser 'active' o 'inactive'
        ]);

        Client::create($request->all());

        return redirect()->route('client.create')->with('success', 'Contador creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
