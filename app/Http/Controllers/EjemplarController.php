<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEjemplarRequest;
use App\Http\Requests\UpdateEjemplarRequest;
use App\Models\Ejemplar;
use App\Models\Socio;

class EjemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ejemplares = Ejemplar::with('libro')->get();
        return view('ejemplares.index', ['ejemplares' => $ejemplares]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEjemplarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ejemplar = Ejemplar::with(['libro', 'prestamos'])->findOrFail($id);

        return view('ejemplares.show', ['ejemplar' => $ejemplar]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ejemplar $ejemplar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEjemplarRequest $request, Ejemplar $ejemplar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ejemplar $ejemplar)
    {
        //
    }
}
