@extends('master')

@section('contenido')
    <h2>Sistema de control escolar  CETIS 107</h2>
    <h3>Catalogos disponibles</h3>
    <p>
        <a href="{{ url('alumnos') }}" class="btn btn-lg btn-primary" style="background-color: rgb(201, 83, 138)">ALUMNOS</a>
    </p>
@stop