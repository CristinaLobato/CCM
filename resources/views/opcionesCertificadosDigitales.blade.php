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
                    <h5 class="card-title">T-CAT</h5>
                    <p class="card-text">Registros de T-CAT y creación</p>
                    <a href="tcat" class="btn btn-outline-dark">Ir</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">T-CATP</h5>
                    <p class="card-text">Registros de T-CATP y creación.</p>
                    <a href="tcatp" class="btn btn-outline-dark">Ir</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection