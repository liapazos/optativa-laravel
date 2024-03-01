<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = "nota";

    public function estudiantes()  {
        return $this->belongsTo(Estudiante::class);
    }

    public function seccion()  {
        return $this->belongsTo(Seccion::class);
    }

}
