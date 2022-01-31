@extends('adminlte::page')

@section('title', 'Blog Titulo')
@section('content_header')
    <h1>Create Role</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}

            @include('admin.roles.partials.form')

            {!! Form::submit('Crear Role', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>

    </div>
@stop
