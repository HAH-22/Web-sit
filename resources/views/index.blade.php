<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])
    <title>Inicio - Venta de Carros</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <!-- Enlaces públicos -->
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('marca') }}">Marcas</a></li>
            <li><a href="{{ url('contacto') }}">Contacto</a></li>

            @guest
                <!-- Si no está autenticado -->
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
            @else
                <!-- Si está autenticado -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">{{ Auth::user()->name }} 🔽</a>
                    <ul class="dropdown-menu">
                        <!-- Solo mostrar el enlace al panel de administración si el usuario es admin -->
                        @if(Auth::user()->is_admin)
                            <li><a href="{{ route('admin.index') }}">Panel de Admin</a></li>
                            <li><a href="{{ route('cars.index') }}">Gestionar Carros</a></li>
                        @endif
                        <li><a href="{{ route('dashboard') }}">Panel de inicio</a></li>
                        <li><a href="{{ route('profile.edit') }}">Perfil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                                @csrf
                                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesión</a>
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </nav>
</header>

<!-- Estilos para el menú desplegable -->
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #c4ff91;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .dropdown-menu li a {
        padding: 12px 16px;
        display: block;
    }
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

<main class="contenido-principal">
    <header class="contenedor">
        <div class="header-texto">
            <h3>El futuro de los carros a gasolina empieza aquí.</h3>
            <h6>Únete a nuestra página para impulsar los carros a gasolina.</h6>
            <h5>El propósito de esta página es ser un intermediario entre el comprador y el vendedor de autos.</h5>
        </div>
        <img class="imag-title" src="{{ asset('assets/img/Bmw4.jpg') }}" alt="Imagen principal">
    </header>

    <div class="container mt-4">
        <div class="row g-5">
            @forelse($cars as $car)
                <div class="col-md-3">
                    <div class="card h-100">
                        <!-- Imagen del carro -->
                        @if($car->imagen)
                            <img src="{{ asset('storage/' . $car->imagen) }}" class="card-img-top" alt="{{ $car->marca }} {{ $car->modelo }}" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/img/default-car.jpg') }}" class="card-img-top" alt="Carro sin imagen" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->marca }} {{ $car->modelo }}</h5>
                            <h6 class="card-text">Año: {{ $car->anio }} | Precio: ${{ number_format($car->precio, 2) }}</h6>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn mt-2">Ver más</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No hay carros disponibles en este momento. ¡Vuelve pronto!</p>
                </div>
            @endforelse
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