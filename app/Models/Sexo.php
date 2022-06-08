<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    public function pacientes(){
        return $this->hasMany('App\Models\Paciente', 'sexo_id', 'id');
    }

    protected $fillable =['nombre',
                          'descripcion',
                          ];
}
