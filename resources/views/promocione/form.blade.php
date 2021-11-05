<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_prom') }}
            {{ Form::text('id_prom', $promocione->id_prom, ['class' => 'form-control' . ($errors->has('id_prom') ? ' is-invalid' : ''), 'placeholder' => 'Id Prom']) }}
            {!! $errors->first('id_prom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $promocione->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $promocione->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $promocione->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechainicio') }}
            {{ Form::text('fechainicio', $promocione->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechavencimiento') }}
            {{ Form::text('fechavencimiento', $promocione->fechavencimiento, ['class' => 'form-control' . ($errors->has('fechavencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
            {!! $errors->first('fechavencimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $promocione->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>