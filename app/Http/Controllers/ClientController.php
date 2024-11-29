<?php

namespace App\Http\Controllers;
use App\Models\Counter;
use App\Models\Document;
use App\Models\Regime;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        $counters = Counter::all();
        return view('clients.index', compact('clients','counters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $counters = Counter::all();
        $regimes = Regime::all();
        $token = Str::random(8);

        
        


        return view('clients.create', compact('counters', 'token', 'regimes'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable',
            'counter_id' => 'nullable',
            'regime_id' => 'nullable',
            'status' => 'required',
            'phone' => 'nullable|string|unique:clients|max:10',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:clients|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'rfc' => 'nullable|string|unique:clients|max:13',
            'curp' => 'nullable|string|unique:clients|max:18',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'cp' => 'nullable|string|max:5',
            'nss' => 'nullable|string|max:11',
            'note' => 'nullable|string|max:500',
            'token' => 'required|string|size:8|unique:clients',
            'birthdate' => 'nullable|date|before:today',
        ]);
        $fullname = $request->name . ' ' . $request->last_name;
        Client::create([
            'user_id' => $request->user_id,
            'counter_id'=> $request->counter_id,
            'status'=> $request->status,
            'phone'=> $request->phone,
            'name'=> $request->name,
            'email'=> $request->email,
            'last_name'=> $request->last_name,
            'address'=> $request->address,
            'rfc'=> $request->rfc,
            'curp'=> $request->curp,
            'city'=> $request->city,
            'state'=> $request->state,
            'cp'=> $request->cp,
            'nss'=> $request->nss,
            'regime_id'=> $request->regime_id,
            'note'=> $request->note,
            'token'=> $request->token,
            'birthdate'=> $request->birthdate,
            'full_name' => $fullname,
        ]);

        return redirect()->route('client.index')->with('success', 'Contador creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client,)
    {
        return view('clients.show', [
            'client' => $client,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $regimes = Regime::all();

        return view('clients.edit',[
            'client' => $client,
            'regimes' => $regimes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        // Validar y actualizar el post
        $fullname = $request->name . ' ' . $request->last_name;
        $request->validate([
            'user_id' => 'nullable',
            'counter_id' => 'nullable',
            'status' => 'required',
            'phone' => 'nullable|string|unique|max:10',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:clients|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'rfc' => 'nullable|string|unique:clients|max:13',
            'rfc_user' => 'nullable|string|max:13',
            'curp' => 'nullable|string|unique:clients|max:18',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'cp' => 'nullable|string|max:5',
            'nss' => 'nullable|string|max:11',
            'regime_id' => 'nullable|string|max:255',
            'note' => 'nullable|string|max:500',
            'token' => 'required|string|size:8|unique:clients',
            'birthdate' => 'nullable|date|before:today',
        ]);

        $request->merge(['full_name' => $fullname]);
        $client->update($request->all());
        return redirect()->route('client.index')->with('success', 'Contador actualizado exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client = Client::findOrFail($client->id);
        $client->delete();
        return redirect()->route('client.index')->with('success', 'Contador Borrado Exitosamente');
    }
}
