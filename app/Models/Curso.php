<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = "curso";

    public function depatamento()  {
        return $this->hasMany(Departamento::class);
    }

    public function secciones()  {
        return $this->hasMany(Seccion::class);
    }
}
