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
            <h1 class="si"> Control de Estacionamiento</h1>
                <div class="div_nav">
                    <nav class="menu">
                        <ul>
                            <li><a href="/index">Inicio</a></li>
                            <li><a href="/acceso">Acceso</a></li>
                            <li><a href="/registro">Registro</a></li>
                            <li><a href="/ayuda">Ayuda</a></li></li>
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
        <div class="footer-columns">
            <!-- Columna 1: Contacto -->
            <div class="footer-contacto">
                <h1 class="footer_h1">Contacto</h1>
                <h3>Dirección:</h3><p> Carretera Federal 200 K.m 9
                    Xalisco, Nayarit. C.P. 63780</p>
                <h3>Teléfono:</h3><p> +52 (311) 211 9800</p>
                <h3>Correo electrónico:</h3><p> info@utnay.edu.mx</p>
            </div>

            <!-- Columna 2: Redes Sociales -->
            <div class="footer-redes">
                <h1 class="footer_h1">Síguenos</h1>
                <ul class="redes-sociales">
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Twitter</a></li>
                    <li><a href="#" target="_blank">Instagram</a></li>
                    <li><a href="#" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <!-- Sección de derechos de autor -->
        <div class="footer-copyright">
            <p>© 2024 Control de Estacionamiento. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
