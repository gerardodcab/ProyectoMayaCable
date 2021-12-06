<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pack') }}
            {{ Form::text('id_pack', $paquete->id_pack, ['class' => 'form-control' . ($errors->has('id_pack') ? ' is-invalid' : ''), 'placeholder' => 'Id Pack']) }}
            {!! $errors->first('id_pack', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $paquete->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('velocidad') }}
            {{ Form::text('velocidad', $paquete->velocidad, ['class' => 'form-control' . ($errors->has('velocidad') ? ' is-invalid' : ''), 'placeholder' => 'Velocidad']) }}
            {!! $errors->first('velocidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $paquete->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precioinstal') }}
            {{ Form::text('precioinstal', $paquete->precioinstal, ['class' => 'form-control' . ($errors->has('precioinstal') ? ' is-invalid' : ''), 'placeholder' => 'Precioinstal']) }}
            {!! $errors->first('precioinstal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
           
            {{ Form::file('imagen', $paquete->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo') }}
            {{ Form::text('id_tipo', $paquete->id_tipo, ['class' => 'form-control' . ($errors->has('id_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo']) }}
            {!! $errors->first('id_tipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>