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
            <h3 class="card-title"> Edite al profesor </h3>
        </div>


        <form action="{{ route( 'profesor.update', $data -> id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method( 'put' )
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$data -> nombre}}">
                   
                    @error( 'nombre' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Categoria </label>
                    <input type="text" class="form-control" name="categoria" id="categoria" value="{{$data -> categoria}}">
                   
                    @error( 'categoria' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Correo electrónico </label>
                    <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" value="{{$data -> correo_electronico}} ">
                   
                    @error( 'correo_electronico' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Edad </label>
                    <input type="number" class="form-control" name="edad" id="edad" value="{{$data -> edad}}">
                   
                    @error( 'edad' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Dirección </label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{$data -> direccion}}">
                   
                    @error( 'direccion' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"> Años de experiencia </label>
                    <input type="number" class="form-control" name="anno_experiencia" id="anno_experiencia" value="{{$data -> anno_experiencia}}">
                   
                    @error( 'anno_experiencia' )
                        <div class="alert alert-danger m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1"> Especialidad </label>
                    <input type="text" class="form-control" name="especialidad" id="especialidad" value="{{$data -> especialidad}}">
                   
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
