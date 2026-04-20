<div class="card shadow-lg border-0">
    <div class="card-body p-5">
        <div class="texto-centrado mb-4">
            <h2 class="h4">Información del Perfil</h2>
            <p class="text-muted">Actualiza la información de tu perfil y tu dirección de correo electrónico.</p>
        </div>

        <form method="post" action="{{ route('profile.update') }}" class="mt-4">
            @csrf
            @method('patch')

            <div class="texto-centrado mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required autofocus>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="texto-centrado mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div class="mt-2">
                        <p class="text-muted">Tu dirección de correo electrónico no está verificada.</p>
                        <button form="send-verification" class="btn btn-link p-0">{{ __('Haz clic aquí para reenviar el correo de verificación.') }}</button>
                    </div>

                    @if (session('status') === 'verification-link-sent')
                        <div class="alert alert-success mt-2">Se ha enviado un nuevo enlace de verificación a tu correo.</div>
                    @endif
                @endif
            </div>

            <div class="d-flex align-items-center gap-3 mt-4">
                <button type="submit" class="btn btn-editar">Guardar cambios</button>
                @if (session('status') === 'profile-updated')
                    <span class="text-success">¡Información actualizada!</span>
                @endif
            </div>
        </form>
    </div>
</div>