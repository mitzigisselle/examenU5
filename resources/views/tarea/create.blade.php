@extends('layouts.app')

@section('template_title')
    Create Tarea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="background-color: transparent">
                    <div class="card-header text-white">
                        <span class="card-title">Crear Tarea</span>
                    </div>
                    <div class="card-body text-white">
                        <form method="POST" action="{{ route('tareas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tarea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
