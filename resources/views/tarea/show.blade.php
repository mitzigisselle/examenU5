@extends('layouts.app')

@section('template_title')
    {{ $tarea->name ?? 'Show Tarea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: transparent">
                    <div class="card-header text-white">
                        <div class="float-left">
                            <span class="card-title">Show Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body text-white">
                        
                        <div class="form-group">
                            <strong>Proyecto Id:</strong>
                            {{ $tarea->proyecto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Tarea:</strong>
                            {{ $tarea->nombre_tarea }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tarea->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $tarea->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tarea->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
