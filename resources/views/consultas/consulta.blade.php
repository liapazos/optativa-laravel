@extends('adminlte::page')

{{-- @section('title', 'Consultas') --}}

@section('css')
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop

@section('content')

<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-80 p-5 text-white bg-dark rounded-3">
          <h2>Consulta Uno</h2>
          <p>
            Devuelve los nombres y edades de los estudiantes inscritos en un curso impartido 
            por el profesor de mayor experiencia.
          </p>
          <form action="{{ route( 'consulta.consultaUno' ) }}" method="get">
            @csrf
            <button class="btn btn-outline-light" type="submit">Ver</button>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-80 p-5 bg-light border rounded-3">
          <h2>Consulta Dos</h2>
          <p>
            Devuelve nombre, apellido y teléfono de los estudiantes con mayor calificación en los 
            cursos que han matriculado.
          </p>
          <form action="{{ route( 'consulta.consultaDos' ) }}" method="get">
            @csrf
            <button class="btn btn-outline-secondary" type="submit">Ver</button>
          </form>
        </div>
      </div>
    </div>

@stop

@section('js')
    
@stop
