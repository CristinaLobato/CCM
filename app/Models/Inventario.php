<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable=[
        'portatiles','torres','pantalla1','pantalla2','web_cam','cascos','lector_targetas','mobiles','teclado','raton','fecha_encriptacion','clave_encriptacion','telefono_fijo','hoja_entrega'
    ];
}
