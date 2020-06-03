<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heroe extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'titulo','imagen'
    ];
}
