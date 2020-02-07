<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;
class TipoUsuario extends Model
{
    public function usuario(){
    	return $this->belongsTo('Usuario');
    }
}
