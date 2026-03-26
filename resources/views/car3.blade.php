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
            <h3>Koenigsegg Jesko</h3>
            </div>
            <img class="imag-title" src="{{ asset('assets/img/KoenigseggJesko.jpg') }}" alt="">
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h1>Se vende</h1>
                            <h2>Koenigsegg Jesko</h2>

                            <hr class="my-4">

                            <div class="row justify-content-center">
                                <p class="lead"><strong>Se vende</strong> un Koenigsegg Jesko</p>
                                <p class="h5">Kilometraje: 30,000 Kms</p>
                                <p class="h4 text-success">Precio: $3,500,000 dólares</p>
                                <p class="h6">Descripción: Este Koenigsegg Jesko es un superdeportivo sueco con un motor V8 de 5.0 litros y una potencia de 1,200 CV.
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