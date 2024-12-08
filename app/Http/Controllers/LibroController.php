<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::with('ejemplares')->get();

        return view('libros.index', ['libros' => $libros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:50',
            'paginas' => 'required|integer|max:9999',
            'publicacion' => 'required|date',
        ], [
            'titulo.required' => 'El titulo es obligatorio.',
            'titulo.max' => 'El titulo no puede tener más de 255 caracteres.',
            'autor.required' => 'El autor es obligatorio.',
            'autor.max' => 'El nombre del autor no puede tener más de 255 caracteres.',
            'paginas.required' => 'El paginas es obligatorio.',
            'paginas.integer' => 'El paginas debe ser un número entero válido.',
            'fabricante_id.required' => 'El fabricante es obligatorio.',
            'fabricante_id.date' => 'La fecha no coincide.',
        ]);

        $libro = Libro::create($validated);
        $libro->save();
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
