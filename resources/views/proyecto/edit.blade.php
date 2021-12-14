@extends('layouts.app')

@section('template_title')
    Update Proyecto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="background-color: transparent">
                    <div class="card-header text-white">
                        <span class="card-title">Editar Proyecto</span>
                    </div>
                    <div class="card-body text-white">
                        <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
