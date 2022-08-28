<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $table="trabajadores";

    protected $fillable = [
        'dependencia_id',
        'nombres',
        'apellidos',
        'documento',
        'correo',
        'estado',
    ];

    protected $appends = ['full_name'];





    public function dependenica()
    {
        return $this->belongsTo('App\Models\Dependencia', 'dependencia_id');
    }

    public function getFullNameAttribute() // notice that the attribute name is in CamelCase.
{
    return $this->nombres . ' ' . $this->apellidos;
}



}
