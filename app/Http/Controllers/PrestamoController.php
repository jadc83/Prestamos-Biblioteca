<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePrestamoRequest;
use App\Models\Ejemplar;
use App\Models\Prestamo;
use App\Models\Socio;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $socios = Socio::all();
        $ejemplares = Ejemplar::whereDoesntHave('prestamos', function ($query) {
            $query->whereNull('devuelto');
        })->with('prestamos')->get();

        $top = Ejemplar::withCount('prestamos')
        ->orderBy('prestamos_count', 'desc')
        ->limit(5)
        ->get();


        return view('prestamos.create', ['socios' => $socios, 'ejemplares' => $ejemplares, 'top' => $top]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Ejemplar $ejemplar)
    {
        $validated = $request->validate([
            'socio_id' => 'required|integer|exists:socios,id',
            'ejemplar_id' => 'required|integer|exists:ejemplares,id',
        ]);

        $prestamo = new Prestamo();
        $prestamo->socio_id = $validated['socio_id'];
        $fecha_inicio = now();
        $fecha_fin = (clone $fecha_inicio)->addMonth(1);
        $prestamo->inicio_prestamo = $fecha_inicio;
        $prestamo->fin_prestamo = $fecha_fin;

        $ejemplar = Ejemplar::find($validated['ejemplar_id']);
        $prestamo->save();
        $prestamo->ejemplares()->attach($ejemplar);
        session()->flash('success', 'El préstamo se ha registrado correctamente.');
        return redirect()->route('ejemplares.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrestamoRequest $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }

    public function devolver(Prestamo $prestamo)
    {
        $prestamo->devuelto = now()->toDateString();
        $prestamo->save();
        $ejemplar = $prestamo->ejemplares->first();

        return redirect()->route('ejemplares.show', ['ejemplar' => $ejemplar->id]);
    }
}
