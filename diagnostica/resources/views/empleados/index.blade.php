@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Empleados de la empresa</h2>
    <a href="{{ route('empleados.create') }}" class="btn btn-outline-primary">Crear a un empleado</a>

</div>

<div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Ciudad</th>
                        <th>Cargo</th>
                        <th>Salario</th>
                        <th>Acciones</th>
                        <th>Aumento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->nombres }}</td>
                            <td>{{ $empleado->apellidos }}</td>
                            <td>{{ $empleado->cedula }}</td>
                            <td>{{ $empleado->ciudad }}</td>
                            <td>{{ $empleado->cargo }}</td>
                            <td>{{ $empleado->salario_base }}</td>
                            <td>
                            <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-outline-primary">Ver</a>
                                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-outline-secondary">Editar</a>
                                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                    </form>
                                </td>
                                <td>
                                @if($empleado->salario_base<=10000)
                                <a href="{{ route('empleados.showaumento', $empleado->id) }}" class="btn btn-success">Aumentar Salario</a>
                                @else
                                <a href="" class="btn btn-outline-success">Aumentar Salario</a>
                                @endif
                            </td>
                                
                                
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
@endsection