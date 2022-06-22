@extends('layouts.app', ['activePage' => 'paciente', 'titlePage' => __('Crear Paciente')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <table class="table table-light">
            <thead>
                <tr class="text-center">
                    <th>id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Tipo de Documento</th>
                    <th>N° de Documento</th>
                    <th>Sexo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->id}}</td>
                    <td>{{$paciente->nombre1}} {{$paciente->nombre2}}</td>
                    <td>{{$paciente->apellido1}} {{$paciente->apellido2}}</td>
                    <td>{{$paciente->tipo_documento_descripcion}}</td>
                    <td>{{$paciente->documento}}</td>
                    <td>{{$paciente->sexo_nombre}}</td>
                    <td>{{$paciente->direccion}}</td>
                    <td>{{$paciente->telefono}}</td>
                    <td>{{$paciente->correo}}</td>
                    <td>{{$paciente->empresa_nombre}}</td>
                    <td>
                        <a href="{{url('pacientes/pdf')}}" class="btn btn-success">PDF</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection