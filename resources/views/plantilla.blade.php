<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Estacionamiento</title>
    <link rel="stylesheet" type="text/css" href="{{asset('estilos/plantilla.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="contenedor">
            <img class="logo" src="Imagenes/logo-utn.png">
            <h1 class="h1"> Control de Estacionamiento</h1>
                <div class="div_nav">
                    <nav class="menu">
                        <ul>
                            <li><a href="/index">Inicio</a></li>
                            <li><a href="/acceso">Acceso</a></li>
                            <li><a href="/registro">Registro</a></li>
                        </ul>
                    </nav>
                </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div>
            <div>
                <div>
                    <h5>Contacto</h5>
                    <p>Dirección: Carretera Federal 200 K.m 9
                        Xalisco, Nayarit. C.P. 63780</p>
                    <p>Teléfono: +52 (311) 211 9800</p>
                    <p>Email: info@utnay.edu.mx</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
