@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Aumentar Salario del Empleado</h2>

    <form action="{{ route('empleados.aumento', $empleado->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cedula" class="form-label">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $empleado->cedula }}"
                readonly>
        </div>
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $empleado->nombres }}"
                readonly>
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $empleado->apellidos }}"
                readonly>
        </div>
        <div class="mb-3">
            <label for="salario_base" class="form-label">Salario</label>
            <input type="number" class="form-control" id="salario_base" name="salario_base"
                value="{{ $empleado->salario_base }}" readonly>
        </div>
        <div class="mb-3">
            <label for="aumento" class="form-label">Cantidad a Aumentar</label>
            <input type="number" class="form-control" id="aumento" name="aumento" step="0.01" min="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Aumentar Salario</button>
    </form>

    <a href="{{ route('empleados.index') }}" class="btn btn-secondary mt-3">Volver a la Lista de
        Empleados</a>
</div>

@endsection
