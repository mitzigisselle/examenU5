@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: transparent">
                    <div class="card-header text-white">
                        <div class="float-left">
                            <span class="card-title">Ver proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body text-white">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $proyecto->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $proyecto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $proyecto->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
