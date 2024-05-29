<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        return view('tareas.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        //$request->validate([
        //    'titulo' => 'required|string|min:10|max:100',
        //    'descripcion' => 'required|string|min:22|max:255',
        //]);

        // Crear una nueva tarea usando el método `create` del modelo
        Tarea::create($request->all());

        // Redireccionar a la vista de listado de tareas
        return redirect()->route('tareas.index');
    }

    public function show(string $id)
    {
        //En esta sección se presenta la información a detalle, sin que se pueda editar (solo lectura)
    }

    public function edit(string $id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.edit', compact('tarea'));
    }

    public function update(Request $request, string $id)
    {
         // Validar los datos del formulario
        //$request->validate([
        //    'titulo' => 'required|string|min:10|max:100',
        //    'descripcion' => 'required|string|min:22|max:255',
        //]);

        // Trear la tarea por su ID
        $tarea = Tarea::findOrFail($id);

        // Actualizar los datos 
        $tarea->update($request->all());

        // Redireccionar a la vista de listado de tareas
        return redirect()->route('tareas.index');
    }

    public function destroy(string $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect()->route('tareas.index');
    }
}
