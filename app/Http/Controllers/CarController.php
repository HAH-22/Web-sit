<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $car = Car::create($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('cars', 'public');
            $car->update(['imagen' => $path]);
        }

        return redirect()->route('cars.index')->with('success', 'Carro creado exitosamente.');
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $car->update($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior si existe
            if ($car->imagen) {
                \Storage::disk('public')->delete($car->imagen);
            }
            $path = $request->file('imagen')->store('cars', 'public');
            $car->update(['imagen' => $path]);
        }

        return redirect()->route('cars.index')->with('success', 'Carro actualizado exitosamente.');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all(); 
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        // Opcional: eliminar la imagen asociada del almacenamiento
        if ($car->imagen) {
            \Storage::disk('public')->delete($car->imagen);
        }
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Carro eliminado exitosamente.');
    }
}
