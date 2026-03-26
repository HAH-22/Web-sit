<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Importamos el modelo correcto

class UserController extends Controller
{
    // Muestra la lista de usuarios (panel de administración)
    public function index()
    {
        $users = User::all();
        return view('usuarios.users', compact('users'));
    }

    // Muestra el formulario para crear un usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // Muestra el formulario para editar un usuario
    public function edit(User $user)
    {
        return view('usuarios.edits', compact('user'));
    }

    // Guarda un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.index')->with('success', 'Usuario creado correctamente');
    }

    // Actualiza un usuario
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $data = $request->only('name', 'email');
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.index')->with('success', 'Usuario actualizado');
    }

    // Elimina un usuario
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Usuario eliminado');
    }
}
