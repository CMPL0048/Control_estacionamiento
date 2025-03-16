@extends('plantilla')

@section('title', 'Acceso')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('estilos/plantilla.css')}}">
    <div class="centrado">
        <div class="recuadro">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>ACCESO</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">CORREO ELECTRÓNICO:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">CONTRASEÑA:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">ACCEDER</button>
                    </form>
                    <p class="text-center mt-3">¿No tienes una cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
