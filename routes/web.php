<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index');
});

// Ruta para el panel de administración (lista de usuarios)
Route::get('/admin', [UserController::class, 'index'])->name('admin.index')->middleware('auth');

// Rutas completas para la gestión de usuarios
Route::resource('user', UserController::class);

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/marca', function () {
    return view('marca');
})->name('marca');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/car1', function () {
    return view('car1');
})->name('car1');

Route::get('/car2', function () {
    return view('car2');
})->name('car2');

Route::get('/car3', function () {
    return view('car3');
})->name('car3');

Route::get('/car4', function () {
    return view('car4');
})->name('car4');

Route::get('/pago', function () {
    return view('pago');
})->name('pago');

Route::get('/comex', function () {
    return view('comex');
})->name('comex');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/agregar', function () {
    return view('agregar');
})->name('agregar');

Route::get('/quitar', function () {
    return view('quitar');
})->name('quitar');

Route::get('/banear', function () {
    return view('banear');
})->name('banear');

Route::get('/agrcar', function () {
    return view('agrcar');
})->name('agrcar');

Route::get('/quitcar', function () {
    return view('quitcar');
})->name('quitcar');

Route::get('/banus', function () {
    return view('banus');
})->name('banus');

Route::get('/quitadmin', function () {
    return view('quitadmin');
})->name('quitadmin');

Route::get('/agadmin', function () {
    return view('agadmin');
})->name('agadmin');

Route::get('/qdmin', function () {
    return view('qdmin');
})->name('qdmin');

// Ruta principal para el panel de administración (muestra la lista de usuarios)
Route::get('/admin', [UserController::class, 'index'])->name('admin.index');

// Rutas RESTful para la gestión de usuarios (crear, editar, eliminar, etc.)
Route::resource('user', UserController::class);

// Opcional: si quieres mantener /users, que también muestre la lista
Route::get('/users', [UserController::class, 'index'])->name('users.index');