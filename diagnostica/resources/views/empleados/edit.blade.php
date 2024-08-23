@extends('layouts.app')
@section('content')

<div class="container">
<h2>Editar registro de empleado</h2>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $empleado->nombres }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $empleado->apellidos }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $empleado->cedula }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $empleado->ciudad }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="{{ $empleado->cargo }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Salario</label>
            <input type="number" class="form-control" id="salario_base" name="salario_base" value="{{ $empleado->salario_base }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection