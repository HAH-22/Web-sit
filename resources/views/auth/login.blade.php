<x-guest-layout>
    <div class="text-center mb-6">
        <h2 class="mt-4 text-2xl font-bold text-gray-800">Bienvenido</h2>
        <p class="text-gray-600">Inicia sesión con tu cuenta</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="texto-centrado mb-4">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                   class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="texto-centrado mb-4">
            <label for="password" class="form-label">Contraseña</label>
            <input id="password" type="password" name="password" required
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="block mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 shadow-sm">
                <span class="ms-2 text-sm text-gray-600">Acuérdate de mí</span>
            </label>
        </div>

        <div id="botones-centrados" class="flex items-center justify-between mt-6">
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-sm text-blue-600 hover:text-blue-800 underline">
                    Crear cuenta
                </a>
            @endif
            <button type="submit" class="btn btn-editar">Iniciar Sesión</button>
        </div>
    </form>
</x-guest-layout>