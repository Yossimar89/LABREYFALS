@extends('layouts.app', ['activePage' => 'paciente', 'titlePage' => __('Crear Paciente')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <form action="{{url('pacientes')}}" method="POST">
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="nombre1" class="card-title" require>Primer Nombre</label>
                    <input type="text" class="form-control" name="nombre1" required>
                </div>
                <div class="col-md-6">
                    <label for="nombre2" class="card-title" require>Segundo Nombre (Opcional)</label>
                    <input type="text" class="form-control" name="nombre2">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="apellido1" class="card-title">Primer Apellido</label>
                    <input type="text" class="form-control" name="apellido1" required>
                </div>
                <div class="col-md-6">
                    <label for="apellido2" class="card-title">Segundo Apellido</label>
                    <input type="text" class="form-control" name="apellido2" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="tipo_documento_id" class="card-title">Tipo de Documento</label>
                    <select name="tipo_documento_id" class="form-control" required>
                        <option value="">Seleccione Tipo de Documento</option>
                        @foreach($tipoDocumentos as $tipoDocumento)
                        <option value="{{$tipoDocumento['id']}}">
                            {{$tipoDocumento['nombre']}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="card-title">Documento</label>
                    <input type="text" class="form-control" name="documento" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="direccion" class="card-title">Direccion</label>
                    <input type="text" class="form-control" name="direccion" required>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="card-title">Telefono</label>
                    <input type="text" class="form-control" name="telefono" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="correo" class="card-title">Correo Electrónico</label>
                    <input type="text" class="form-control" name="correo" required>
                </div>
                <div class="col-md-6">
                    <label for="sexo_id" class="card-title">Sexo</label>
                    <select name="sexo_id" class="form-control" required>
                        <option value="">Seleccione Sexo</option>
                        @foreach($sexos as $sexo)
                        <option value="{{$sexo['id']}}">
                            {{$sexo['nombre']}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="empresa_id" class="card-title">Empresa</label>
                    <select name="empresa_id" class="form-control" required>
                        <option value="">Seleccione Empresa</option>
                        @foreach($empresas as $empresa)
                        <option value="{{$empresa['id']}}">
                            {{$empresa['nombre']}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div class="row d-flex justify-content-center">
                    <input type="submit" class="btn btn-success btn-lg" value="enviar">
                </div>
            </div>

        </form>
    </div>
    <script>
        Swal.fire(
            'hola',
            'como vas',
            'algo mas?'
        )
    </script>
</div>
@endsection