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
                        <form action="{{url('/paciente/'.$paciente->id)}}" method="post" class="form" id="formEdit">
                            @csrf
                            {{method_field('EDIT')}}
                            <div class="form-group has-feedback">
                                <input type="submit" class="btn btn-warning btn-sm" value="Editar">
                            </div>
                        </form> 
                        <form action="{{url('/paciente/'.$paciente->id)}}" method="post" id="formDelete">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" onclick="swal confirm('Quieres borrar el Registro?')" class="btn btn-danger btn-sm" value="Borrar">
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection