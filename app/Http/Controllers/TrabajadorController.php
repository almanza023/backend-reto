<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores=Trabajador::all();
        return response()->json([
            'status'=>'index',
            'trabajadores'=>$trabajadores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTrabajadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'documento' => 'required',
            'correo' => 'required',
            'dependencia' => 'required',
        ]);

        Trabajador::create([
            'dependencia_id'=>$request->dependencia,
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'documento'=>$request->documento,
            'correo'=>$request->correo,
        ]);

        return response()->json([
            'status'=>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajador $trabajador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrabajadorRequest  $request
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajador $trabajador)
    {
        //
    }
}
