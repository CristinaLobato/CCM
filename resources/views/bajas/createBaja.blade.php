@extends('master')
@section('content')
<style>
    .card{
       margin-top:10%;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nueva Baja</div>

                <div class="card-body">
                    <form action="{{ route('bajas.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="fecha_baja" class="col-md-4 col-form-label text-md-right">Fecha de Baja:</label>
                            <div class="col-md-6">
                                <input type="date" id="fecha_baja" name="fecha_baja" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="motivo" class="col-md-4 col-form-label text-md-right">Motivo:</label>
                            <div class="col-md-6">
                                <input type="text" id="motivo" name="motivo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="baja_certificado" class="col-md-4 col-form-label text-md-right">Baja Certificado:</label>
                            <div class="col-md-6">
                                <select id="baja_certificado" name="baja_certificado" class="form-control">
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection