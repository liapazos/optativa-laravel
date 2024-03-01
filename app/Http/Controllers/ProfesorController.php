<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index()
    {
        $data = Profesor::all();
        return view( 'profesor.mostrar', compact( 'data' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'profesor.crear' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre'             => 'required|string',
            'correo_electronico' => 'required|email',
            'direccion'          => 'required|string',
            'especialidad'       => 'required|string',
            'categoria'          => 'required|string',
            'anno_experiencia'   => 'required|integer',
            'edad'               => 'required|integer',
        ]);

        $datos = new Profesor();
        $datos -> id =random_int(23, 100);
        $datos -> id_departamento = 1;

        $datos -> nombre = $request -> nombre;
        $datos -> correo_electronico = $request -> correo_electronico;
        $datos -> direccion = $request -> direccion;
        $datos -> categoria = $request -> categoria;
        $datos -> especialidad = $request -> especialidad;
        $datos -> anno_experiencia = $request -> anno_experiencia;
        $datos -> edad = $request -> edad;

        $datos -> save();

        return back() -> with( 'success', 'El profesor ha sido creado exitosamente' );

    }

    public function edit(string $id)
    {
        $data = Profesor::find( $id );
        return view( 'profesor.editar', compact( 'data' ) );
    }

    public function update(Request $request, string $id)
    {
        $request -> validate([
            'nombre'             => 'required|string',
            'correo_electronico' => 'required|email',
            'direccion'          => 'required|string',
            'especialidad'       => 'required|string',
            'categoria'          => 'required|string',
            'anno_experiencia'   => 'required|integer',
            'edad'               => 'required|integer',
        ]);

        $dato = Profesor::find( $id );

        if(  $request -> nombre != $dato -> nombre ) 
            $dato -> nombre = $request -> nombre;

        if(  $request -> direccion != $dato -> direccion ) 
            $dato -> direccion = $request -> direccion;
    
        if(  $request -> correo_electronico != $dato -> correo_electronico ) 
            $dato -> correo_electronico = $request -> correo_electronico;
        
        if(  $request -> edad != $dato -> edad ) 
            $dato -> edad = $request -> edad;
        
        if(  $request -> anno_experiencia != $dato -> anno_experiencia ) 
            $dato -> anno_experiencia = $request -> anno_experiencia;
        
        if(  $request -> categoria != $dato -> categoria ) 
            $dato -> categoria = $request -> categoria;
        
        if(  $request -> especialidad != $dato -> especialidad ) 
            $dato -> especialidad = $request -> especialidad;

        $dato -> save();

        return redirect() -> route( 'profesor.index' ) -> with( 'success', 'El profesor ha sido editado exitosamente' );

    }

    public function destroy(string $id)
    {
        $dato = Profesor::find( $id );
        $dato -> delete();

        return back() -> with( 'success', 'El profesor ha sido eliminado exitosamente' );

    }
}
