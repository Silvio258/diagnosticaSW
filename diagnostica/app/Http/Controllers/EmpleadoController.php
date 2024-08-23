<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
        //
        public function index()
{
    
    $empleados = Empleado::orderBy('apellidos') 
                         ->orderBy('nombres')  
                         ->get();

    return view('empleados.index', compact('empleados'));
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado=new Empleado;
        $empleado->nombres=$request->nombres;
        $empleado->apellidos=$request->apellidos;
        $empleado->cedula=$request->cedula;
        $empleado->ciudad=$request->ciudad;
        $empleado->cargo=$request->cargo;
        $empleado->salario_base=$request->salario_base;
        $empleado->save();
        return redirect()->route('empleados.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empleado=Empleado::Find($id);
        return view('empleados.show',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $empleado=Empleado::Find($id);
        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $empleado=Empleado::find($id);
        $empleado->nombres=$request->nombres;
        $empleado->apellidos=$request->apellidos;
        $empleado->cedula=$request->cedula;
        $empleado->ciudad=$request->ciudad;
        $empleado->cargo=$request->cargo;
        $empleado->salario_base=$request->salario_base;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
      
        $empleado=Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleados.index');
    }

    public function showaumento($id)
    {
        $empleado = Empleado::find($id);
    
    
        return view('empleados.raise', compact('empleado'));
    }

    public function aumento(Request $request,string $id)
    {
        //
      
        $empleado=Empleado::find($id);

        $aumento = $request->input('aumento');

    
         $empleado->salario_base += $aumento;

  
        $empleado->save();
        return redirect()->route('empleados.index');
    }
}
