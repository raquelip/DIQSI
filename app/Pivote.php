<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
use App\Producto;
class Pivote extends Model
{
    return $this->belongsToMany('Reserva','Producto');
}
