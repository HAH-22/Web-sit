<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])
    <title>Pagos</title>
    
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
                <h3>Aquí podrás realizar el pago de tu carro.</h3>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h3 class="card-title tex-cen mb-4">Método de pago</h3>

                            <h5 class="mb-3">Información de la tarjeta</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="card-number" class="form-label">Número de tarjeta</label>
                                    <input type="text" class="form-control" id="card-number" placeholder="1234 5678 9012 3456" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="expiry-date" class="form-label">Fecha de vencimiento</label>
                                    <input type="text" class="form-control" id="expiry-date" placeholder="MM/AA" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="cvv" class="form-label">Código de seguridad (CVV)</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="123" required>
                                </div>
                            </div>

                            <hr class="my-4">

                            <h5 class="mb-3">Información de facturación</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="localidad" class="form-label">Localidad / Ciudad</label>
                                    <input type="text" class="form-control" id="localidad" placeholder="Ciudad" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="codigo-postal" class="form-label">Código postal / ZIP</label>
                                    <input type="text" class="form-control" id="codigo-postal" placeholder="12345" required>
                                </div>
                                <div class="col-12">
                                    <label for="direccion1" class="form-label">Dirección de facturación</label>
                                    <input type="text" class="form-control" id="direccion1" placeholder="Calle y número" required>
                                </div>
                                <div class="col-12">
                                    <label for="direccion2" class="form-label">Dirección de facturación (segunda línea)</label>
                                    <input type="text" class="form-control" id="direccion2" placeholder="Apartamento, suite, etc.">
                                </div>
                                <div class="col-md-6">
                                    <label for="pais" class="form-label">País</label>
                                    <input type="text" class="form-control" id="pais" placeholder="País" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" placeholder="+56 9 1234 5678" required>
                                </div>
                                <a href="{{ url('comex') }}" class="btn">Comprar</a>
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