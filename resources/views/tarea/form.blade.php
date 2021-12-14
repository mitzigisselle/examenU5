<div class="box box-info padding-1">
    <div class="box-body">
        


        <div class="form-group">
            {{ Form::label('proyecto_id') }}
            {{ Form::select('proyecto_id', $proyectos, $tarea->proyecto_id, ['class' => 'form-control' . ($errors->has('proyecto_id') ? ' is-invalid' : ''), 'placeholder' => 'Proyecto Id']) }}
            {!! $errors->first('proyecto_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>




        <div class="form-group">
            {{ Form::label('nombre_tarea') }}
            {{ Form::text('nombre_tarea', $tarea->nombre_tarea, ['class' => 'form-control' . ($errors->has('nombre_tarea') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tarea']) }}
            {!! $errors->first('nombre_tarea', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tarea->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $tarea->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $tarea->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
            
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"> Agregar</i></button>
    </div>
</div>