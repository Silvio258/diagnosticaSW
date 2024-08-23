@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Detalles del Empleado</h2>
  
    <div class="mb-3">
    <label for="cedula" class="form-label">Cedula</label>
    <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $empleado->cedula }}" readonly>
</div>
<div class="mb-3">
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $empleado->nombres }}" readonly>
</div>
<div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $empleado->apellidos }}" readonly>
</div>
<div class="mb-3">
    <label for="ciudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $empleado->ciudad }}" readonly>
</div>
<div class="mb-3">
    <label for="cargo" class="form-label">Cargo</label>
    <input type="text" class="form-control" id="cargo" name="cargo" value="{{ $empleado->cargo }}" readonly>
</div>
<div class="mb-3">
    <label for="salario_base" class="form-label">Salario</label>
    <input type="number" class="form-control" id="salario_base" name="salario_base" value="{{ $empleado->salario_base }}" readonly>
</div>
<a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver</a>


@endsection