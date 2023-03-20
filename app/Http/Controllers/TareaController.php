<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::orderByDesc('id')->get();
        return view('tarea.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre'    => 'required|max:60',
                'descripcion'    => 'nullable|max:255',
                'finalizada'       => 'nullable|numeric|min:0|max:1',
                'urgencia'        => 'required|numeric|min:0|max:2',
                'fecha_limite'   => 'required|date_format:Y-m-d\TH:i'
            ]);
        $tarea = Tarea::create( $datos);
        return redirect()->route('tarea.index');
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
