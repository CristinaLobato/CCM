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
        <form action="{{ route('tcatp.create') }}" method="GET">
            <button type="submit" class="btn btn-outline-light" style="border: none; background: none; padding: 0; cursor: pointer;">
                <img src="{{ asset('image/añadir.png') }}" style="max-height: 30px;">
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Fecha de validez</th>
                    <th>Número de serie</th>
                    <th>Caducidad</th>
                    <th>Código de susp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tcatp as $tcatps)
                    <tr>
                        <td>{{ $tcatps->fecha_validez }}</td>
                        <td>{{ $tcatps->numero_serie }}</td>
                        <td>{{ $tcatps->caducidad }}</td>
                        <td>{{ $tcatps->codigo_susp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection