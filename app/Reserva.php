<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
use App\EstadoPedido;
class Reserva extends Model
{
    return $this->belongsTo('Persona','EstadoPedido');

}
