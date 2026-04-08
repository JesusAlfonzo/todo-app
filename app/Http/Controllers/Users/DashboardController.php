<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Verificamos por seguridad si hay alguien logueado. 
        // Si no lo hay, lo mandamos al login para evitar el error "null".
        if (!auth()->check()) {
            return redirect()->route('login'); // O el nombre de tu ruta de login
        }


        // 2. Buscamos las tareas donde el user_id coincida con el ID del usuario actual.
        // auth()->id() nos da directamente el numerito (ej: 1), sin meterse con el modelo User completo.
        $Tasks = Task::where('user_id', auth()->id())->get();

        // Informacion del usuario
        $user = auth()->user();

        $firstName = $user->first_name;
        $lastName = $user->last_name;

        return view('users.home', compact('user', 'Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
