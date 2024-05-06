@extends('master')
@section('content')

<style>
    .listado{
       margin-top:5%;
    }
</style>

<div class="container">
    <!--Boton para crear una baja-->
    <div class="listado">
        <form action="{{ route('bajas.create') }}" method="GET">
            <button type="submit" class="btn btn-outline-light" style="border: none; background: none; padding: 0; cursor: pointer;">
                <img src="{{ asset('image/añadir.png') }}" style="max-height: 30px;">
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Fecha de Baja</th>
                    <th>Motivo</th>
                    <th>Baja Certificado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($baja as $bajas)
                    <tr>
                        <td>{{ $bajas->fecha_baja }}</td>
                        <td>{{ $bajas->motivo }}</td>
                        <td>{{ $bajas->baja_certificado ? 'Sí' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection