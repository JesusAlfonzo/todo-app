<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\StoreTaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create'); // -> Create Form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $validated = $request->validated(); // -> Validate the request (form) and store in a variable

        $request->user()->tasks()->create($validated); // -> Create a task with a validated data form

        return redirect()->route('home.index')->with('success', 'Tarea Creada'); // -> Return to home with success message
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id); // -> Find the task by his id and store in a variable

        return view('tasks.show', compact('task')); // -> return to show view with the data task
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id); // -> Find the task by his id and store in a variable
        
        return view('tasks.edit', compact('task')); // -> return to edit view (form) with the data task
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 1. VALIDACIÓN: Laravel revisa las reglas automáticamente.
        // Si falla, hace el "return back()->withErrors()" por ti y detiene la función aquí.
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ], [
            // Aquí personalizamos el mensaje que quieres que salga en el frontend
            'title.max' => 'El título excedió la cantidad de caracteres permitidos (255).',
            'content.max' => 'El contenido excedió la cantidad de caracteres permitidos (255).',
            'title.required' => 'El título es obligatorio.',
            'content.required' => 'El contenido es obligatorio.'
        ]);

        // 2. BUSCAR: Encuentra la tarea en la base de datos
        $task = Task::findOrFail($id); 

        // 3. ASIGNAR: Toma lo que viene del formulario y lo asigna al objeto
        $task->title = $request->input('title'); 
        $task->content = $request->input('content'); 

        // 4. GUARDAR: Guarda los cambios en la base de datos
        $task->save(); 

        // 5. REDIRIGIR: Vuelve al home con mensaje de éxito
        return redirect()->route('home.index')->with('success', 'Tarea Actualizada con éxito!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id); // -> Find the task by his id and store in a variable

        $task->delete(); // -> Delete the task (too easy)

        return redirect()->route('home.index')->with('success', 'Tarea eliminada con exito!'); // -> Return to home with a success message
    }
}
