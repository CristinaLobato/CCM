@extends('master')
@section('content')

<style>
    .listado {
        margin-top: 5%;
    }
</style>

<div class="container">
    <!-- Boton para crear un personal -->
    <div class="listado">
        <form action="{{ route('personal.create') }}" method="GET">
            <button type="submit" class="btn btn-outline-light" style="border: none; background: none; padding: 0; cursor: pointer;">
                <img src="{{ asset('image/añadir.png') }}" style="max-height: 30px;">
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Sexo</th>
                    <th>Regimen</th>
                    <th>Area</th>
                    <th>Departamento</th>
                    <th>Fecha de incorporacion</th>
                    <th>NIF/NIE</th>
                    <th>Correo</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personal as $person)
                <tr>
         
                    <td>{{ $person->nombre }}</td>
                    <td>{{ $person->apellido1 }}</td>
                    <td>{{ $person->apellido2 }}</td>
                    <td>{{ $person->sexo }}</td>
                    <td>{{ $person->regimen }}</td>
                    <td>{{ $person->area }}</td>
                    <td>{{ $person->departamento }}</td>
                    <td>{{ $person->fecha_incorporacion }}</td>
                    <td>{{ $person->nif }}</td>
                    <td>{{ $person->correo }}</td>
                    <td>
                    <a href="{{ route('personal.edit', $person) }}" class="btn btn-primary">
                     <i class="fas fa-edit"></i> Editar</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
