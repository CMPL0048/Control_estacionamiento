@extends('plantilla')

@section('title', 'Acceso')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('estilos/acceso.css')}}">
<div class="reporte-container">
    <h2>Acceso</h2>
    <form class="reporte-form">
        <!-- Descripción del Incidente -->
        <div class="form-group">
            <label for="descripcion">Correo electrónico</label>
            <input type="text" id="correo" name="correo" required>
        </div>

        <!-- Número de Cajón -->
        <div class="form-group">
            <label for="cajon">Contraseña:</label>
            <input type="text" id="contrasena" name="contrasena" required>
        </div>

        <p class="text-center mt-3">¿No tienes una cuenta? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('registro') }}">Regístrate</a></p>
        <!-- Botón de Enviar -->
        <button type="submit">Acceder</button>
    </form>
</div>
@endsection
