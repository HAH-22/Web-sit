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