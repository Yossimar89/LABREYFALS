<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Sexo;
use App\Models\Empresa;
use App\Models\TipoDocumento;
use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pacientes['pacientes']=Paciente::all();
        $pacientes['pacientes'] = Paciente::join('tipo_documentos', 'tipo_documentos.id', '=', 'pacientes.tipo_documento_id')
        ->join('sexos', 'sexos.id', 'pacientes.sexo_id')
        ->join('empresas', 'empresas.id', 'pacientes.empresa_id')
        ->select('sexos.nombre as sexo_nombre', 'tipo_documentos.descripcion as tipo_documento_descripcion', 
        'empresas.nombre as empresa_nombre', 'pacientes.*')
        ->get();
        // return response()->json([
        //     'pacientes'=>$pacientes
        // ]);
        return view('paciente.index', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos=Sexo::all();
        $tipoDocumentos=TipoDocumento::all();
        $empresas=Empresa::all();
        return view('paciente.create', compact('sexos', 'tipoDocumentos', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePacienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePacienteRequest $request)
    {
        $paciente = request()->except('_token');
        $save=Paciente::insert($paciente);
         if ($save){
             Alert::success('Guardado', 'Registro Exitoso');
             return back();

         }else{
             Alert::error('Error', 'Su Registro no fue Exitoso');
             return back();
         }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePacienteRequest  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        $destroyed=Paciente::destroy($id);
        // return response()->json([
        //     'd'=>$destroyed
        // ]);
        // try {
        //     Paciente::destroy($id);
        //     $destroyed=Paciente::destroy($id);
        //     return redirect('paciente');
        //     Alert::success('Eliminado', 'El Registro se ha Destruido');
        // } catch (Exception $e) {
        //     Alert::error('Error', $e);
        //     return redirect('paciente');
        // }
         if($destroyed==0){
            Alert::success('Eliminado', 'El Registro se ha Destruido');
             return redirect('paciente');
         }else{
             Alert::error('Error', 'Su Registro no fue Eliminado');
             return redirect('paciente');
         }
    }
}