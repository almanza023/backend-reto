<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $table="tareas";

    protected $fillable = [
        'trabajador_id',
        'descripcion',
        'fecha_limite_entrega',
        'estado',
        'observacion',
        'fecha_novedad',
    ];


    public function trabajador()
    {
        return $this->belongsTo('App\Models\Trabajador', 'trabajador_id');
    }



}
