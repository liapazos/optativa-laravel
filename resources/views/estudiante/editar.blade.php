@extends('adminlte::page')

{{-- @section('title', 'Estudiantes') --}}

@section('content_header')
    <h1> Editar estudiantes </h1>
@stop

@section('css')
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop

@section('content')

    @if( session( 'success' ) )
        <div class="alert alert-success m1">
            <strong>
                {{ session( 'success' ) }}
            </strong>
        </div>
    @endif


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Edite al estudiante </h3>
        </div>


        <form action="{{ route( 'estudiante.update', $dato -> id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method( 'put' )
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$dato -> nombre}}">
                   
                    @error( 'nombre' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Apellidos </label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{$dato -> apellidos}}">
                   
                    @error( 'apellidos' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Correo electrónico </label>
                    <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" value="{{$dato -> correo_electronico}} electrónico">
                   
                    @error( 'correo_electronico' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Edad </label>
                    <input type="number" class="form-control" name="edad" id="edad" value="{{$dato -> edad}}">
                   
                    @error( 'edad' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Dirección </label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{$dato -> direccion}}">
                   
                    @error( 'direccion' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"> Teléfono </label>
                    <input type="number" class="form-control" name="numero_telefono" id="numero_telefono" value="{{$dato -> numero_telefono}} de teléfono">
                   
                    @error( 'numero_telefono' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Aceptar </button>
                <a href="{{route( 'estudiante.index' )}}" class="btn btn-secondary" tabindex="5"> Atrás </a>
            </div>

        </form>
    </div>



@stop

@section('js')
    <script src="https//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
@endsection
