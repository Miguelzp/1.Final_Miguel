<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nif',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'email',
        'genero',
    ];

    //Relacion many to many entre las empresas y los alumnos
    public function empresas(){
        return $this->belongsToMany('App\Models\Empresa');
    }
}
