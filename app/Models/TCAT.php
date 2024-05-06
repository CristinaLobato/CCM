<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCAT extends Model
{
    use HasFactory;
    protected $fillable=[
        'fecha_validez','numero_serie','caducidad','codigo_susp',
    ];
}
