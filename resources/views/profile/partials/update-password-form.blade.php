<div class="card shadow-lg border-0 mt-4">
    <div class="card-body p-5">
        <div class="texto-centrado mb-4">
            <h2 class="h4">Actualizar contraseña</h2>
            <p class="text-muted">Asegúrate de que tu cuenta esté utilizando una contraseña larga y aleatoria para mantenerla segura.</p>
        </div>

        <form method="post" action="{{ route('password.update') }}" class="mt-4">
            @csrf
            @method('put')

            <div class="texto-centrado mb-3">
                <label for="current_password" class="form-label">Contraseña actual</label>
                <input type="password" id="current_password" name="current_password" class="form-control" autocomplete="current-password">
                @error('current_password', 'updatePassword') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="texto-centrado mb-3">
                <label for="password" class="form-label">Nueva contraseña</label>
                <input type="password" id="password" name="password" class="form-control" autocomplete="new-password">
                @error('password', 'updatePassword') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="texto-centrado mb-3">
                <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" autocomplete="new-password">
                @error('password_confirmation', 'updatePassword') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex align-items-center gap-3 mt-4">
                <button type="submit" class="btn btn-editar">Guardar contraseña</button>

                @if (session('status') === 'password-updated')
                    <span class="text-success">¡Contraseña actualizada!</span>
                @endif
            </div>
        </form>
    </div>
</div>