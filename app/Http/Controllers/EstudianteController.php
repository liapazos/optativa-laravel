<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;


class EstudianteController extends Controller
{
     public function index()
    {
        $data = Estudiante::all();
        return view( 'estudiante.mostrar', compact( 'data' ) );
    }

    public function create()
    {
        return view( 'estudiante.crear' );
    }

    public function store(Request $request)
    {
        $request -> validate([
            'nombre'             => 'required|string',
            'apellidos'          => 'required|string',
            'correo_electronico' => 'required|email',
            'edad'               => 'required|integer',
            'numero_telefono'    => 'required|integer',
            'direccion'          => 'required|string',
        ]);

        $datos = new Estudiante();
        $datos -> id =random_int(23, 100);


        $datos -> nombre = $request -> nombre;
        $datos -> apellidos = $request -> apellidos;
        $datos -> correo_electronico = $request -> correo_electronico;
        $datos -> edad = $request -> edad;
        $datos -> numero_telefono = $request -> numero_telefono;
        $datos -> direccion = $request -> direccion;

        $datos -> save();

        return back() -> with( 'success', 'El estudiante ha sido creado exitosamente' );
    }

    public function edit(string $id)
    {
        $dato = Estudiante::find( $id );
        return view( 'estudiante.editar', compact( 'dato' ) );
    }

    public function update(Request $request, string $id)
    {
        $request -> validate([
            'nombre'             => 'required|string',
            'apellidos'          => 'required|string',
            'correo_electronico' => 'required|email',
            'edad'               => 'required|integer',
            'numero_telefono'    => 'required|integer',
            'direccion'          => 'required|string',
        ]);

        $dato = Estudiante::find( $id );

        if(  $request -> nombre != $dato -> nombre ) 
            $dato -> nombre = $request -> nombre;

        if(  $request -> apellidos != $dato -> apellidos ) 
            $dato -> apellidos = $request -> apellidos;
    
        if(  $request -> correo_electronico != $dato -> correo_electronico ) 
            $dato -> correo_electronico = $request -> correo_electronico;
        
        if(  $request -> edad != $dato -> edad ) 
            $dato -> edad = $request -> edad;
        
        if(  $request -> numero_telefono != $dato -> numero_telefono ) 
            $dato -> numero_telefono = $request -> numero_telefono;
        
        if(  $request -> direccion != $dato -> direccion ) 
            $dato -> direccion = $request -> direccion;

        $dato -> save();

        return redirect() -> route( 'estudiante.index' ) -> with( 'success', 'El estudiante ha sido editado exitosamente' );
    }

    public function destroy(string $id)
    {
        $dato = Estudiante::find( $id );
        $dato -> delete();

        return back() -> with( 'success', 'El estudiante ha sido eliminado exitosamente' );

    }
}
