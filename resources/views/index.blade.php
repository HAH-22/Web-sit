<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])
    <title>Index</title>
    
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('marca') }}">Marcas</a></li>
                <li><a href="{{ url('contacto') }}">Contacto</a></li>
                <li><a href="{{ route('login') }}">Iniciar secion</a></li>
                <li><a href="{{ url('admin') }}">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenido-principal">
        <header class="contenedor">
            <div class="header-texto">
            <h3>El futuro de los carros a gasolina empieza aqui.</h3>
            <h6>Unete a nuestra pagina para impulsar a los carros a gasolina.</h6>
            </div>
            <img class="imag-title" src="{{ asset('assets/img/Bmw4.jpg') }}" alt="">
        </header>

    <div class="container mt-4">
        <div class="row g-5">
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('assets/img/Shelby.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Se vende</h5>
                        <h6 class="card-text">Mustang Shelby 2025.</h6>
                        <a href="{{ url('car1') }}" class="btn">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('assets/img/LancerEvo8.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Se vende</h5>
                        <h6 class="card-text">Lancer Evolution 8.</h6>
                        <a href="{{ url('car2') }}" class="btn">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('assets/img/KoenigseggJesko.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Se vende</h5>
                        <h6 class="card-text">Koenigsegg Jesko.</h6>
                        <a href="{{ url('car3') }}" class="btn">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('assets/img/Supramk4.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Se vende</h5>
                        <h6 class="card-text">Toyota Supra 1995.</h6>
                        <a href="{{ url('car4') }}" class="btn">Ver más</a>
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