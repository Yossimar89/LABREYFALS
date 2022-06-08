<?php

namespace App\Http\Controllers;

use App\Models\tipoDocumento;
use App\Http\Requests\StoretipoDocumentoRequest;
use App\Http\Requests\UpdatetipoDocumentoRequest;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretipoDocumentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretipoDocumentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function show(tipoDocumento $tipoDocumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function edit(tipoDocumento $tipoDocumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetipoDocumentoRequest  $request
     * @param  \App\Models\tipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetipoDocumentoRequest $request, tipoDocumento $tipoDocumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipoDocumento $tipoDocumento)
    {
        //
    }
}
