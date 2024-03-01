<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = "departamento";

    public function curso()  {
        return $this->belongsTo(Curso::class);
    }

    public function profesores()  {
        return $this->hasMany(Profesor::class);
    }

}
