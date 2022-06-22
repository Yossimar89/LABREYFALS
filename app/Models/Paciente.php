<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function sexo(){
        return $this->belongsTo('App\Models\Sexo', 'sexo_id', 'id');
    }

    public function empresa(){
        return $this->belongsTo('App\Models\Empresa', 'empresa_id', 'id');
    }

    public function tipoDocumento(){
        return $this->belongsTo('App\Models\Documento', 'tipo_documento_id', 'id');
    }

    public function resultados(){
        return $this->hasMany('App\Models\Resultado', 'resultado_id', 'id');
    }

    protected $fillable =['nombre1',
                          'nombre2',
                          'apellido1',
                          'apellido2',
                          'tipo_documento_id',
                          'documento',
                          'sexo_id',
                          'empresa_id',
                          'direccion',
                          'telefono',
                          'correo'
                          ];
}
