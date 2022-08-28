<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use Illuminate\Http\Request;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias=Dependencia::all();
        return response()->json([
            'status'=>'index',
            'dependencias'=>$dependencias
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
     * @param  \App\Http\Requests\StoreDependenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
        ]);

        Dependencia::create([
            'nombre'=>$request->nombre
        ]);

        return response()->json([
            'status'=>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDependenciaRequest  $request
     * @param  \App\Models\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
