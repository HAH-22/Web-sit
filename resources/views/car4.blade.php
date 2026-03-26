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
            <h2>Se vende</h2>
            <h3>Toyota Supra 1995</h3>
            </div>
            <img class="imag-title" src="{{ asset('assets/img/Supramk4.jpg') }}" alt="">
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h1>Se vende</h1>
                            <h2>Toyota Supra 1995</h2>

                            <hr class="my-4">

                            <div class="row justify-content-center">
                                <p class="lead"><strong>Se vende</strong> un Toyota Supra 1995</p>
                                <p class="h5">Kilometraje: 300,000 Kms</p>
                                <p class="h4 text-success">Precio: $150,000 dólares</p>
                                <p class="h6">Descripción: Este Toyota Supra 1995 es un clásico deportivo japonés con un motor potente y un diseño icónico.
                                 Está en excelente estado, con un mantenimiento regular y sin accidentes.
                                 Es una oportunidad única para los amantes de los autos deportivos.</p>
                                <a href="{{ url('pago') }}" class="btn">Comprar</a>
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