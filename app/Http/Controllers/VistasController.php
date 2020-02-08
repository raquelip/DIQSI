<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
   public function MostrarAdministrador(){
    return view('paginas/Administradorvista');
} 
public function MostrarInicio(){
    return view('welcome');
} 


}
