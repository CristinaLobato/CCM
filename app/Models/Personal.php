<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable=[
            'nombre','apellido1','apellido2','sexo','regimen','area','departamento','fecha_incorporacion','nif','correo'
    ];
}

