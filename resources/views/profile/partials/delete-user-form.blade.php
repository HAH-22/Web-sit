<div class="card shadow-lg border-0 mt-4">
    <div class="card-body p-5">
        <h2 class="h4">Eliminar cuenta</h2>
        <p class="text-muted">Una vez eliminada tu cuenta, todos sus recursos y datos se borrarán permanentemente.</p>
        <button type="button" class="btn btn-eliminar" onclick="document.getElementById('deleteModal').style.display='flex'">
            Eliminar cuenta
        </button>
    </div>
</div>

<div id="deleteModal" style="display: none; position: fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center; z-index: 1000;">
    <div style="background: white; border-radius: 8px; max-width: 500px; width: 90%;">
        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')
            <div style="padding: 20px;">
                <h3>¿Estás seguro de que quieres eliminar tu cuenta?</h3>
                <p>Introduce tu contraseña para confirmar.</p>
                <div class="mb-3">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div style="display: flex; justify-content: flex-end; gap: 10px;">
                    <button type="button" class="btn btn-secondary" onclick="document.getElementById('deleteModal').style.display='none'">Cancelar</button>
                    <button type="submit" class="btn btn-eliminar">Eliminar cuenta</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) this.style.display = 'none';
    });
</script>