@extends('master')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }
    .card-header {
        background-color: #f0f0f0;
        padding: 10px 20px;
        border-bottom: 1px solid #ccc;
        border-radius: 5px 5px 0 0;
    }
    .card-body {
        padding: 20px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"],
    input[type="date"],
    input[type="email"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
    }
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<div class="container">
    
<div style="margin-top: 5%;">
    <div class="card">
        <div class="card-header">Crear Nuevo Personal</div>
        <div class="card-body">
            <form method="post" action="{{ route('personal.store') }}">
                @csrf
                @method('post')
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div>
                    <label for="apellido1">Primer Apellido</label>
                    <input type="text" id="apellido1" name="apellido1" placeholder="Primer Apellido">
                </div>
                <div>
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" id="apellido2" name="apellido2" placeholder="Segundo Apellido">
                </div>
                <div>
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

                <div>
                    <label for="regimen">Regimen</label>
                    <input type="text" id="regimen" name="regimen" placeholder="Regimen">
                </div>
                <div>
                    <label for="area">Area</label>
                    <input type="text" id="area" name="area" placeholder="Area">
                </div>
                <div>
                    <label for="departamento">Departamento</label>
                    <input type="text" id="departamento" name="departamento" placeholder="Departamento">
                </div>
                <div>
                    <label for="fecha_incorporacion">Fecha de Incorporacion</label>
                    <input type="date" id="fecha_incorporacion" name="fecha_incorporacion" placeholder="Fecha de Incorporacion">
                </div>
                <div>
                    <label for="nif">NIF</label>
                    <input type="text" id="nif" name="nif" placeholder="NIF">
                </div>
                <div>
                    <label for="correo">Correo Electronico</label>
                    <input type="email" id="correo" name="correo" placeholder="Correo Electronico">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection
