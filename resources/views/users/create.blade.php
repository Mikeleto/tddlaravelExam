@extends('layout')

@section('title', 'Nuevo usuario')

@section('content')
    <div class="card">
        <div class="card-header h4">
            Crear nuevo usuario
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor, corrige los siguientes errores</h6>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="{{ route('user.store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" name="email" placeholder="email" value="{{ old('email') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Al menos 6 caracteres" class="form-control">
                    </div>
                    <button type="submit">Crear usuario</button>
                    <a href="{{ route('users.index') }}" class="btn btn-link">Regresar al listado de usuarios</a>
                </form>
        </div>
    </div>
@endsection
