@extends('sistema.principal')

@section('contenido')
        <h1>Reporte maestros</h1><br>
        <table border="1">
            <tr>
                <td>Clave</td>
                <td>Foto</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Operaciones</td>
            </tr>
            @foreach($clientes as $ma)
            <tr>
                <td>{{$ma->id_cliente}}</td>
                <td>{{$ma->nombre}}</td>
                <td>{{$ma->edad}}</td>
                <td>
                    
                </td>
            </tr>
            @endforeach
        </table>
@stop