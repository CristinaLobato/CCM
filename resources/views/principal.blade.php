@extends('master')
@section('content')
<a href="{{ route('bajas.index') }}" class="btn btn-primary">Baja</a>
<a href="{{ route('personal.index') }}" class="btn btn-primary">Dar de alta persona</a>

@endsection