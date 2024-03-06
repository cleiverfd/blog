@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Editar etiqueta</h1>
@stop

@section('content')
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
    
<div class="card">
    <div class="card-body">
        {!! Form::model($tag,['route'=>['admin.tags.update', $tag], 'method' => 'PUT']) !!}

            @include('admin.tags.partials.form')

            {!! Form::submit('Actualizar etiqueta', ['class'=>'btn btn-primary']) !!}
            
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-2.1.0/dist/jquery.stringtoslug.min.js')}}"></script>

<script>
   $(document).ready( function() {
    $(".basic-usage").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#permalink',
        space: '-',
        prefix: '',
        suffix: '',
        replace: '',
        AND: 'and',
        options: {},
        callback: false
    });
    });
</script>
@stop