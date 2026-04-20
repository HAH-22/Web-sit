<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Models\Car;

// Ruta principal: muestra todos los carros
Route::get('/', function () {
    $cars = Car::all(); // Obtiene todos los carros
    return view('index', compact('cars'));
})->name('inicio');

// Rutas públicas
Route::get('/marca', function () {
    $marcas = Car::select('marca')->distinct()->get();
    return view('marca', compact('marcas'));
})->name('marca');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Rutas de autenticación (Breeze)
require __DIR__.'/auth.php';

// Panel de usuario autenticado
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de administración (solo para usuarios con is_admin = true)
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [UserController::class, 'index'])->name('admin.index');
    Route::resource('user', UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::resource('cars', CarController::class);
});

// Rutas públicas de carros (cualquier usuario puede ver la lista y los detalles)
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');

// Rutas de administración de carros (solo administradores)
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
    Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
});

// Rutas adicionales (si las necesitas, crea sus vistas)
Route::get('/pago', function () { return view('pago'); })->name('pago');
Route::get('/comex', function () { return view('comex'); })->name('comex');
Route::get('/agregar', function () { return view('agregar'); })->name('agregar');
Route::get('/quitar', function () { return view('quitar'); })->name('quitar');
Route::get('/agrcar', function () { return view('agrcar'); })->name('agrcar');
Route::get('/quitcar', function () { return view('quitcar'); })->name('quitcar');