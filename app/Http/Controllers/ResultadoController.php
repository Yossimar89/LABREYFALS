<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF; 

class ResultadoController extends Controller
{
    
    public function index()
    {    $resultados = Resultado::all();
        return view('resultados/index', compact('resultados','resultados'));
    }

    public function show(Resultado $resultado)
    {
        //
    }

    public function pdf($id)
    {   $resultado = Resultado::FindOrFail($id); 
        View()->share('resultado', $resultado);
        $pdf = PDF::loadView('resultados/pdf/', ['resultado' => $resultado]);
        return $pdf->download('resultado.pdf');
        return $pdf->stream();
    }

}
