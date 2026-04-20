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

<!-- style para el menu desplegable -->
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
        <div class="contenedor">
            <div class="header-texto">
            <h2>Se vende</h2>
            <h3>Mitsubishi Lancer Evolution VIII</h3>
            </div>
            <img class="imag-title" src="{{ asset('assets/img/LancerEvo8.jpg') }}" alt="">
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h1>Se vende</h1>
                            <h2>Mitsubishi Lancer Evolution VIII</h2>

                            <hr class="my-4">

                            <div class="row justify-content-center">
                                <p class="lead"><strong>Se vende</strong> un Mitsubishi Lancer Evolution VIII</p>
                                <p class="h5">Kilometraje: 250,000 Kms</p>
                                <p class="h4 text-success">Precio: $33,043 dólares</p>
                                <p class="h6">Descripción: Este Mitsubishi Lancer Evolution VIII es un clásico deportivo japonés con un motor potente y un diseño icónico.
                                 Está en excelente estado, con un mantenimiento regular y sin accidentes.
                                 Es una oportunidad única para los amantes de los autos deportivos.</p>
                                <p class="h6">Contactos del vendedor:</p>
                                <p class="h6">Teléfono: 987-654-3210</p>
                                <p class="h6">Email: vendero@gmail.com</p>
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