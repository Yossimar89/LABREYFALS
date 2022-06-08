<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoDocumento extends Model
{
    use HasFactory;

    public function pacientes(){
        return $this->hasMany('App\Models\Paciente', 'tipo_documento_id', 'id');
    } 

    protected $fillable =['nombre',
                          'descripcion',
                          ];
}
