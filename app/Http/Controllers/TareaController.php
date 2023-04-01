<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\tarearequest;
//use App\Http\Requests;
//use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Http\Request;

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
     * 
     *  @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     *  @param \Illuminate\Http\Request $request
     *  @return \Illuminate\Http\Response
     */
    public function store(TareaRequest $request)
    {
        $datos = $request->validated( );
        $tarea = Tarea::create( $datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     * 
     *  @param \App\Models\Tarea $tarea
     *  @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return view('tarea.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     * 
     *  @param \Illuminate\Http\Request $request
     *  @param \App\Models\Tarea $tarea
     *  @return \Illuminate\Http\Reponse
     */
    public function update(TareaRequest $request, Tarea $tarea)
    {
        $datos = $request->validated();
        //dd($datos);
        $tarea->update($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     * 
     *  @param \App\Models\Tarea $tarea
     *  @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
    }
}
