@extends('adminlte::page')

@section('title', 'Blog Titulo')
@section('content_header')
    <a class="btn btn-secondary btn btn-sm float-right" href="{{ route('admin.roles.create') }}">Nuevo Rol</a>
    <h1>Lista de roles</h1>
@stop
@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Role</td>
                        <td colspan="2"></td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->ide }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
