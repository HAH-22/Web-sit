<x-guest-layout>
    <div class="text-center mb-6">
        <h2 class="mt-4 text-2xl font-bold text-gray-800">Crear cuenta</h2>
        <p class="text-gray-600">Regístrate para acceder al panel</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div class="texto-centrado mb-4">
            <label for="name" class="form-label">Nombre</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                   class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="texto-centrado mb-4">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                   class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Contraseña -->
        <div class="texto-centrado mb-4">
            <label for="password" class="form-label">Contraseña</label>
            <input id="password" type="password" name="password" required
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirmar contraseña -->
        <div class="texto-centrado mb-4">
            <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                   class="form-control">
        </div>

        <div id="botones-centrados" class="flex items-center justify-between mt-6">
            <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:text-blue-800 underline">
                ¿Ya estás registrado?
            </a>
            <button type="submit" class="btn btn-crear">Registrarse</button>
        </div>
    </form>
</x-guest-layout>