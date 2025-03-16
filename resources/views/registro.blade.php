@extends('plantilla')

@section('title', 'Registro')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('estilos/plantilla.css')}}">
    <div class="centrado">
        <div class="recuadro">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>REGISTRO</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">NOMBRE:</label>
                            <input type="name" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">CORREO ELECTRÓNICO:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">CONTRASEÑA:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="contirm_password" class="form-label">VALIDAR CONTRASEÑA:</label>
                            <input type="confirm_password" class="form-control" id="Confirm_password" name="Confirm_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">MAESTRO O ALUMNO:</label>
                            <select class="form-select" id="role" name="role">
                                <option value="maestro">Maestro</option>
                                <option value="alumno">Alumno</option>
                                <option value="personal">Personal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="model_car" class="form-label">MODELO DE COCHE:</label>
                            <input type="model_car" class="form-control" id="model_car" name="model_car" required>
                        </div>
                        <div class="mb-3">
                            <label for="placas" class="form-label">PLACAS:</label>
                            <input type="placas" class="form-control" id="placas" name="placas" required>
                        </div>
                        <button type="submit" class="btn-primary w-100 btn">REGISTRARME</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
