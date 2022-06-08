<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public function empresa(){
        return $this->hasMany('App\Models\Paciente', 'empresa_id', 'id');
    }
    protected $fillable =['nombre',
                          'descripcion',
                          ];
}
