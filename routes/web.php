<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Tasks\TaskController;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

// Pagina "Raiz"
Route::get('/', function () {
    return view('welcome');
});

// Rutas para "Registro" de usuarios
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Rutas para "Login" de usuarios
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Rutas Autenticadas para la aplicacion
Route::middleware('auth')->group(function () {

    // Dashboard del usuario
    Route::get('/home', [DashboardController::class, 'index'])->name('home.index');

    // Logout del usuario
    Route::post('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

    // Tareas del usuario
    //Pagina index de tareas
    Route::get('/task', [TaskController::class, 'index'])->name('task.index');

    //Pagina formulario de creacion de una tarea
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');

    Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');

    Route::get('/task/{id}/show', [TaskController::class, 'show'])->name('task.show');

    Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update');

    Route::get('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

    //Funcion store para almacenar la data de la creacion de una tarea (para registrarla en la base de datos)
    Route::post('/task', [TaskController::class, 'store'])->name('task.store'); //Store para datos de la tarea

    Route::get('/profile', [UserController::class, 'index'])->name('profile.index');

    Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->name('profile.edit');
    
    Route::put('/profile/{id}', [UserController::class, 'update'])->name('profile.update');

    Route::get('/profile/{id}', [UserController::class, 'destroy'])->name('profile.destroy');

});
