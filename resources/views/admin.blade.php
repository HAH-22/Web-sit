<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])
    <title>Panel de Administración</title>
    
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('marca') }}">Marcas</a></li>
                <li><a href="{{ url('contacto') }}">Contacto</a></li>
                <li><a href="{{ url('login') }}">Iniciar secion</a></li>
                <li><a href="{{ url('admin') }}">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenido-principal">
        <div class="contenedor">
            <div class="header-texto">
            <h2>Panel de Administración</h2>
            <h3>Bienvenido al panel de administración del sitio web</h3>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h1>Panel de Administración</h1>
                            <p>Aquí puedes gestionar el contenido del sitio web, como agregar nuevos productos, editar información existente y revisar las solicitudes de los usuarios.</p>
                            <p>Utiliza las opciones del menú para navegar por las diferentes secciones de administración.</p>
                            <p>Recuerda que esta sección es solo para administradores autorizados. Asegúrate de mantener la seguridad de tu cuenta y no compartir tus credenciales con nadie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h2>Usuarios</h2>
                                <a href="{{ route('users') }}" class="btn">Gestionar Usuarios</a>
                            <h2>Agregar carro</h2>
                                <a href="{{ url('agregar') }}" class="btn">Agregar Carro</a>
                            <h2>Quitar carro</h2>
                                <a href="{{ url('quitar') }}" class="btn">Quitar Carro</a>
                            <h2>Banear usuario</h2>
                                <a href="{{ url('banear') }}" class="btn">Banear usuario</a>
                            <h2>Agregar administrador</h2>
                                <a href="{{ url('agdmin') }}" class="btn">Agregar administrador</a>
                            <h2>Quitar administrador</h2>
                                <a href="{{ url('qdmin') }}" class="btn">Quitar administrador</a>
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