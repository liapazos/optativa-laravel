<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = "profesor";

    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }

    public function departamento()  {
        return $this->belongsTo(Departamento::class);
    }
}
