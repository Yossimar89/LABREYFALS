<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    public function paciente(){
        return $this->belongsTo('App\Models\Paciente', 'paciente_id', 'id');
    }

    protected $fillable = [
        'analisis','resultado',
        'valor_referencia', 
        'fecha_validacion', 
        'paciente_id'
    ];
}
