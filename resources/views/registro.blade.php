@extends('plantilla')

@section('title', 'Registro')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('estilos/registro.css')}}">
<div class="reporte-container">
    <h2>Registro</h2>
    <form class="reporte-form">
        <!-- Descripción del Incidente -->
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input type="text" id="correo" name="correo" required>
        </div>

        <!-- Número de Cajón -->
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="text" id="contrasena" name="contrasena" required>
        </div>

        <div class="form-group">
            <label for="vali_contrasena">Validar contrasena:</label>
            <input type="text" id="vali_contrasena" name="vali_contrasena" required>
        </div>

        <div class="form-group">
            <label for="role" class="form-label">Rol dentro de la universidad:</label>
            <select class="form-select" id="role" name="role">
                <option value="maestro">Maestro</option>
                <option value="alumno">Alumno</option>
                <option value="personal">Personal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="modelo">Modelo de vehiculo:</label>
            <input type="text" id="modelo" name="modelo" required>
        </div>

        <div class="form-group">
            <label for="placas">Placas:</label>
            <input type="text" id="placas" name="placas" required>
        </div>

        <button type="submit">Acceder</button>
    </form>
</div>
@endsection
