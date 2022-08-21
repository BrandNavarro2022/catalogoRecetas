@extends('layouts.app')

@section('template_title')
    {{ $receta->name ?? 'Ver Receta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recetas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $receta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $receta->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $receta->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $receta->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Instrucciones:</strong>
                            {{ $receta->instrucciones }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredientes:</strong>
                            {{ $receta->ingredientes }}
                        </div>
                        <div class="form-group">
                            <strong>Variaciones:</strong>
                            {{ $receta->variaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
