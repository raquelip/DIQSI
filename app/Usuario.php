<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
class Usuario extends Model
{
    public function Persona(){
    	return $this->belongsTo('Persona');
	}
}
