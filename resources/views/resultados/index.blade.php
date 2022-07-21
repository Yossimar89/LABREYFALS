@extends('layouts.app', ['activePage' => 'paciente', 'titlePage' => __('Crear Paciente')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <table class="table table-light">
            <thead>
                <tr class="text-center">
                    <th>id</th>
                    <th>analisis</th>
                    <th>resultado</th>
                    <th>valor_referencia</th>
                    <th>fecha_validacion</th>
                    <th>Codigo Paciente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach($resultados as $resultado)
                <tr>
                    <td>{{$resultado->id}}</td>
                    <td>{{ $resultado->analisis}}</td>
                    <td>{{ $resultado->resultado}}</td>
                    <td>{{ $resultado->valor_referencia}}</td>
                    <td>{{ $resultado->fecha_validacion}}</td>
                    <td>
                        <a href="{{url('/resultados/pdf/'.$resultado->id)}}" class="btn btn-success">PDF</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection