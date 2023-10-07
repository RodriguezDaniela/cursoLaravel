<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido al curso de Laravel</h1><hr>
    <h2>{{ $nombre }}</h2>
    <h2>Lista de asistencia 07/10/2023</h2>
    <ul>
        @foreach ($alumnos as $a)
        <li>{{ $a }}</li> 
        @endforeach
    </ul>
    <h2>Datos</h2>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Turno</td>
        </tr>
        @foreach ($datos as $d)
        <tr>
            <td>{{  $d["Nombre"] }}</td>
            <td>{{  $d["Edad"] }}</td>
            <td>{{  $d["Turno"] }}</td>
        </tr>
            
        @endforeach
    </table>
    <p>Laravel utiliza una arquitecvtura MVC Modelo vista Controlador</p>

    <p>Modelo: Es la base de datos, los modelos son nuestras tablas, por cada tabla debemos tener un modelo.
       Los modelos estan en la carpeta de app/Models
    </p>

    <p>
        Vista: Las vistas son los HTML y CSS que se muestran en la pagina web 
        Estan en la carpeta de resources/views
    </p>

    <p>Controladores: Son los archivos donde se plasma la logica del negocio
        Estan en app/http/controllers
    </p>

    <p>
        Las rutas: son las urls que nos dirigen hacia una pagina especifica
        Estan en routes/web.php
    </p>
</body>
</html>