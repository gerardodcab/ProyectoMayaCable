<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pack_canal') }}
            {{ Form::text('id_pack_canal', $paquetesCanale->id_pack_canal, ['class' => 'form-control' . ($errors->has('id_pack_canal') ? ' is-invalid' : ''), 'placeholder' => 'Id Pack Canal']) }}
            {!! $errors->first('id_pack_canal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pack') }}
            {{ Form::text('id_pack', $paquetesCanale->id_pack, ['class' => 'form-control' . ($errors->has('id_pack') ? ' is-invalid' : ''), 'placeholder' => 'Id Pack']) }}
            {!! $errors->first('id_pack', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_canal') }}
            {{ Form::text('id_canal', $paquetesCanale->id_canal, ['class' => 'form-control' . ($errors->has('id_canal') ? ' is-invalid' : ''), 'placeholder' => 'Id Canal']) }}
            {!! $errors->first('id_canal', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>