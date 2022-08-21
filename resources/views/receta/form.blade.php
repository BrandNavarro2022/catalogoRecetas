<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $receta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::select('categoria_id', $categorias,$receta->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => '-- Seleccione una Categoria --']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::textarea('descripcion', $receta->descripcion, ['class' => 'form-control', 'rows' => 2 . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('instrucciones') }}
            {{ Form::textarea('instrucciones', $receta->instrucciones, ['class' => 'form-control', 'rows'=>2 . ($errors->has('instrucciones') ? ' is-invalid' : ''), 'placeholder' => 'Instrucciones']) }}
            {!! $errors->first('instrucciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingredientes') }}
            {{ Form::textarea('ingredientes', $receta->ingredientes, ['class' => 'form-control', 'rows'=>2 . ($errors->has('ingredientes') ? ' is-invalid' : ''), 'placeholder' => 'Ingredientes']) }}
            {!! $errors->first('ingredientes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('variaciones') }}
            {{ Form::textarea('variaciones', $receta->variaciones, ['class' => 'form-control', 'rows'=>2 . ($errors->has('variaciones') ? ' is-invalid' : ''), 'placeholder' => 'Variaciones']) }}
            {!! $errors->first('variaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::file('imagen', ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : '')]) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
