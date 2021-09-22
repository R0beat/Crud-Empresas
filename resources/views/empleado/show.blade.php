@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $empleado->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $empleado->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $empleado->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $empleado->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $empleado->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empleado->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $empleado->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $empleado->fecha_ingreso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
