<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    
    public function index2()
    {
        $resultados = Resultado::all();
        return view('resultados/index', compact('resultados'));
    }

}
