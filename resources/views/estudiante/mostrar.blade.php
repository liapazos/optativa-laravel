@extends('adminlte::page')

{{-- @section('title', 'Estudiante') --}}

@section('css')
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop

@section('content')

    @if ( session( 'success' ) )
        <div class="alert alert-success">
            <strong>
                {{ session( 'success' ) }}
            </strong>
        </div>
    @endif

    <form action="{{ route( 'estudiante.create' ) }}" method="GET">
        <button type="submit" class="btn btn-primary m-2"> Crear </button>
    </form>
    
    <div class="card">
        <div class="card-body table-responsive">

        <table class="table table-striped mt-4" id="about-data">
        
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Apellidos </th>
                    <th scope="col"> Edad </th>
                    <th scope="col"> Correo </th>
                    <th scope="col"> Teléfono </th>
                    <th scope="col"> Dirección </th>
                    <th scope="col"> Acciones </th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ( $data as $data )
                    <tr>
                        <td> {{ $data -> id }} </td>
                        <td> {{ $data -> nombre }} </td>
                        <td> {{ $data -> apellidos }} </td>
                        <td> {{ $data -> edad }} </td>
                        <td> {{ Str::limit($data -> correo_electronico, 15, '...') }} </td>
                        <td> {{ $data -> numero_telefono }} </td>
                        <td> {{ $data -> direccion }} </td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="{{ route( 'estudiante.edit', $data -> id ) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-info btn-sm" type="submit"> Editar </button>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="{{ route( 'estudiante.destroy', $data -> id ) }}" method="POST">
                                            @csrf
                                            @method( 'DELETE' )
                                            <button class="btn btn-danger btn-sm"> Eliminar </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>


        </div>
    </div>

@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#about-data').DataTable();
    </script>
@stop
