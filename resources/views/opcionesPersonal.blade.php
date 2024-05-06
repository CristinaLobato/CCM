@extends('master')
@section('content')
<style>
    .card{
        background-color: #b2dafa;
    }
    .row{
        margin-top:10%;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Personal</h5>
                    <p class="card-text">Podás ver todo el personal registrado, crear y editarlos.</p>
                    <a href="personal" class="btn btn-outline-dark">Ir</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Bajas</h5>
                    <p class="card-text">Podrás observar todas las bajas registradas, crear, y editarlas.</p>
                    <a href="bajas" class="btn btn-outline-dark">Ir</a>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Certificados digitales</h5>
                    <p class="card-text">Podrás observar T-CAT o T-CATP registradas, además de crear nuevos.</p>
                    <a href="certificados_digitales" class="btn btn-outline-dark">Ir</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection