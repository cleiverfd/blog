@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm float-right">Nuevo Post</a>
    <h1>Listado de Posts</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')

@stop

@section('js')

@stop
