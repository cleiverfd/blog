@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Crear nueva categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.categories.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre','') !!}
                    {!! Form::text('name', '', ['class'=>'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug','') !!}
                    {!! Form::text('slug', '', ['class'=>'form-control', 'placeholder' => 'Ingrese el slug de la categoria']) !!}
                </div>

                {!! Form::submit('Crear Categoria', ['class'=>'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop