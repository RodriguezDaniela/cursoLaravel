<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "Daniela";
        $alumnos=['Ximena','Perez','Sergio','Evelyn', 'Dani','Juan','David', 'kyan', 'Eitan', 'Adrian', 'Leo'];
        $datos= array(['Nombre'=> 'Ximena', 'Edad'=> 17, 'Turno'=>'Vespertino'],
                      ['Nombre'=> 'Perez', 'Edad'=> 17, 'Turno'=>'Matutino'],
                      ['Nombre'=> 'Sergio', 'Edad'=> 38, 'Turno'=>'Nocturno'],
                      ['Nombre'=> 'Evelyn', 'Edad'=> 17, 'Turno'=>'Vespertino'],
                      ['Nombre'=> 'Dani', 'Edad'=> 18, 'Turno'=>'Matutino'],
                      ['Nombre'=> 'Juan', 'Edad'=> 25, 'Turno'=>'Vespertino'],
                      ['Nombre'=> 'David', 'Edad'=> 17, 'Turno'=>'Vespertino'],
                      ['Nombre'=> 'Kyan', 'Edad'=> 17, 'Turno'=>'Vespertino'],
                      ['Nombre'=> 'Eitan', 'Edad'=> 20, 'Turno'=>'Nocturno'],
                      ['Nombre'=> 'Adrian', 'Edad'=> 17, 'Turno'=>'Matutino'],
                      ['Nombre'=> 'Leo', 'Edad'=> 17, 'Turno'=>'Vespertino'],
    );
        return view('bienvenido', compact('nombre', 'alumnos', 'datos'));
    }
}
