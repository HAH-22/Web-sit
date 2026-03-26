<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])
    <title>Carros</title>
    
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('marca') }}">Marcas</a></li>
                <li><a href="{{ url('contacto') }}">Contacto</a></li>
                <li><a href="{{ url('login') }}">Iniciar secion</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenido-principal">
        <div class="contenedor">
            <div class="header-texto">
            <h2>Toda nuestra informacion de contacto</h2>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <div class="row justify-content-center">
                                <h3 class="te-cen">Correo electrónico:</h3>
                                <p class="h5">contacto@franware.com</p>
                                <h3 class="te-cen">Teléfono:</h3>
                                <p class="h5">+56 9 1234 5678</p>
                                <h3 class="te-cen">Dirección:</h3>
                                <p class="h5">Av. Principal 123, Ciudad, País</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2025 Mi Empresa. Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>