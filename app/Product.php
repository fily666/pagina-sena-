<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'tipo', 'logo', 'historia', 'caracteristicas', 'aplicabilidad', 'herramientas', 'ejemplos', 'requerimientos', 'costos', 'costosimg', 'grafica', 'video'
    ];
}
