@extends('plantilla')

@section('title', 'Registro')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">REGISTRO</h1>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">CORREO ELECTRÓNICO:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">CONTRASEÑA:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">MAESTRO O ALUMNO:</label>
                        <select class="form-select" id="role" name="role">
                            <option value="maestro">Maestro</option>
                            <option value="alumno">Alumno</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">REGISTRARME</button>
                </form>
            </div>
        </div>
    </div>
@endsection
