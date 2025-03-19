@extends('plantilla')

@section('title', 'Reporte de Incidente')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('estilos/reporte.css')}}">
<div class="reporte-container">
    <h2>REPORTE</h2>
    <form class="reporte-form">
        <!-- Descripción del Incidente -->
        <div class="form-group">
            <label for="descripcion">Descripción del incidende</label>
            <textarea id="descripcion" name="descripcion" rows="5" required></textarea>
        </div>

        <!-- Número de Cajón -->
        <div class="form-group">
            <label for="cajon">Número de cajón</label>
            <input type="text" id="cajon" name="cajon" required>
        </div>

        <!-- Número de Modelo de la Víctima -->
        <div class="form-group">
            <label for="modelo-victima">Modelo de coche afectado</label>
            <input type="text" id="modelo-victima" name="modelo-victima" required>
        </div>

        <!-- Número de Modelo del Auto Involucrado -->
        <div class="form-group">
            <label for="modelo-auto">Modelo de coche involucrado</label>
            <input type="text" id="modelo-auto" name="modelo-auto" required>
        </div>

        <!-- Nombre y Rol -->
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="rol">Rol dentro de las instalaciones</label>
            <select id="rol" name="rol" required>
                <option value="maestra">Maestra</option>
                <option value="alumno">Alumno</option>
            </select>
        </div>

        <!-- Adjuntar Imagen -->
        <div class="form-group">
            <label for="imagen">Adjuntar imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required>
        </div>

        <!-- Botón de Enviar -->
        <button type="submit">Enviar Reporte</button>
    </form>
</div>
@endsection
