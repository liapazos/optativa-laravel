<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ConsultaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource( '/estudiante', EstudianteController::class ) -> names( 'estudiante' );
Route::resource( '/profesor', ProfesorController::class ) -> names( 'profesor' );
Route::get( '/consultas', [ConsultaController::class, 'index'] ) -> name( 'consulta.index' );
Route::get( '/consulta_uno', [ConsultaController::class, 'consultaUno'] ) -> name( 'consulta.consultaUno' );
Route::get( '/consulta_dos', [ConsultaController::class, 'consultaDos'] ) -> name( 'consulta.consultaDos' );
