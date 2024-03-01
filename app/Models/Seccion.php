<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = "seccion";
    
    public function curso()  {
        return $this->belongsTo(Curso::class);
    }

    public function examen()  {
        return $this->hasOne(Examen::class);
    }

    public function inscripcion()  {
        return $this->hasMany(Inscripcion::class);
    }

    public function notas()  {
        return $this->hasMany(Notas::class);
    }

    public function profesores()  {
        return $this->hasMany(Profesor::class);
    }

}
