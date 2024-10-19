<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

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
     // Validar y guardar el nuevo post
        $request->validate([
            'name' => 'required|string|max:255', // Obligatorio, debe ser una cadena, máximo 255 caracteres
            'last_name' => 'required|string|max:255', // Obligatorio, debe ser una cadena, máximo 255 caracteres
            'email' => 'required|email|max:255', // Obligatorio, formato de correo electrónico, único en la tabla 'users'
            'rfc' => 'required|string|size:13', // Obligatorio, debe tener exactamente 13 caracteres (para México), único
            'curp' => 'required|string|size:18', // Obligatorio, debe tener exactamente 18 caracteres, único
            'birthdate' => 'required|date', // Obligatorio, debe ser una fecha válida, antes de la fecha actual
            'city' => 'required|string|max:255', // Obligatorio, debe ser una cadena, máximo 255 caracteres
        ]);
    
        Counter::create($request->all());
        
        return redirect()->route('counter.index')->with('success', 'Contador creado exitosamente.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // Validar y actualizar el post
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
}
