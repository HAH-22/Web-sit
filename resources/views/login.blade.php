<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/stylesl.css'])
    <title>Iniciar Sesión</title>

</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Bienvenido</h1>
            <p>Inicia sesión con tu cuenta</p>
        </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="********" required>
            </div>

            <div>
                <a href="{{ url('/') }}" class="btn">Iniciar Sesión</a>
            </div>

        <div class="register-link">
            ¿No tienes una cuenta? <a href="{{ url('register') }}">Regístrate aquí</a>
        </div>
    </div>
</body>
</html>