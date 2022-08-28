<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas=Tarea::all();
        $data=[];
        foreach ($tareas as $tarea) {
           array_push($data, $tarea, $tarea->trabajador);
        }
        return response()->json([
            'status'=>'index',
            'tareas'=>$tareas
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
     * @param  \App\Http\Requests\StoreTareaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descripcion' => 'required',
            'fecha_limite' => 'required',
            'trabajador' => 'required',
        ]);

        Tarea::create([
            'trabajador_id'=>$request->trabajador,
            'descripcion'=>$request->descripcion,
            'fecha_limite_entrega'=>$request->fecha_limite,
        ]);

        return response()->json([
            'status'=>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTareaRequest  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function cambiarEstado(Request $request)
    {
        $tarea=Tarea::find($request->tarea_id);
        $tarea->observaciones=$request->observacion;
        $tarea->fecha_novedad=$request->fecha_entrega;
        $tarea->estado=$request->estado;
        $tarea->save();
        return response()->json([
            'status'=>'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
