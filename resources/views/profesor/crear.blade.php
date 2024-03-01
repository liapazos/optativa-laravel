@extends('adminlte::page')

{{-- @section('title', 'Profesores') --}}

@section('content_header')
    <h1> Crear profesores </h1>
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
            <h3 class="card-title"> Cree Profesores </h3>
        </div>


        <form action="{{ route( 'profesor.store' ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduzca el nombre">
                   
                    @error( 'nombre' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Categoria </label>
                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Introduzca la categoria">
                   
                    @error( 'categoria' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Correo electrónico </label>
                    <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" placeholder="Introduzca el correo electrónico">
                   
                    @error( 'correo_electronico' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Edad </label>
                    <input type="number" class="form-control" name="edad" id="edad" placeholder="Introduzca la edad">
                   
                    @error( 'edad' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Dirección </label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Introduzca la dirección">
                   
                    @error( 'direccion' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"> Años de experiencia </label>
                    <input type="number" class="form-control" name="anno_experiencia" id="anno_experiencia" placeholder="Introduzca los años de experiencia">
                   
                    @error( 'anno_experiencia' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1"> Especialidad </label>
                    <input type="text" class="form-control" name="especialidad" id="especialidad" placeholder="Introduzca la expecialidad">
                   
                    @error( 'especialidad' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Aceptar </button>
                <a href="{{route( 'profesor.index' )}}" class="btn btn-secondary" tabindex="5"> Atrás </a>
            </div>

        </form>
    </div>



@stop

@section('js')
    <script src="https//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
@endsection
