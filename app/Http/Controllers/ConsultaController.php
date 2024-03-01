<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Curso;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index() {
        return view( 'consultas.consulta' );
    }

    public function consultaUno() {
        $estudiantes = Estudiante::select('estudiante.nombre', 'estudiante.edad', 'estudiante.id AS id_estudiante', 'estudiante.direccion', 'estudiante.apellidos', 'estudiante.numero_telefono', 'estudiante.correo_electronico')
        ->join('inscripcion as i', 'estudiante.id', '=', 'i.id_estudiante')
        ->join('seccion as s', 'i.id_seccion', '=', 's.id_seccion')
        ->join('curso as c', 's.id_curso', '=', 'c.id_curso')
        ->join('profesor as p', 'c.id_departamento', '=', 'p.id_departamento')
        ->where('p.anno_experiencia', '=', DB::table('profesor')->max('anno_experiencia'))
        ->get();

        return view( 'consultas.mostrarCU', compact( 'estudiantes' ) );
    }

    public function consultaDos() {
        $estudiantes =  Estudiante::select('estudiante.nombre', 'estudiante.edad', 'estudiante.id AS id_estudiante', 'estudiante.direccion', 'estudiante.apellidos', 'estudiante.numero_telefono', 'estudiante.correo_electronico')
        ->join('inscripcion as i', 'estudiante.id', '=', 'i.id_estudiante')
        ->join('seccion as s', 'i.id_seccion', '=', 's.id_seccion')
        ->join('nota as n', function($join) {
            $join->on('i.id_seccion', '=', 'n.id_seccion');
            $join->on('estudiante.id', '=', 'n.id_estudiante');
        })
        ->where('n.nota', '=', DB::table('nota')
        ->select(DB::raw('cast(max(n2.nota) as text)'))
        ->whereRaw('n2.id_estudiante = e.id AND n2.id_seccion = i.id_seccion')
        ->toSql());

        return view( 'consultas.mostrarCD', compact( 'estudiantes' ) );
    }
}
