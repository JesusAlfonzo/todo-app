<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Users\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// --- RUTAS DE REGISTRO ---
// Muestra el formulario
Route::get('/register', [RegisterController::class, 'create'])->name('register.index'); 
// Procesa el formulario
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// --- RUTAS DE LOGIN Y LOGOUT ---
// Muestra el formulario de login (asumiendo que tu método se llama create o index)
Route::get('/login', [LoginController::class, 'create'])->name('login.index'); 
// Procesa el inicio de sesión
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); 
// Procesa el cierre de sesión (Fíjate que ya no pide ID y usa POST)
Route::post('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

// --- RUTAS PROTEGIDAS ---
// Para el dashboard suele ser mejor una ruta sencilla a menos que realmente hagas un CRUD completo ahí
Route::get('/home', [DashboardController::class, 'index'])->name('home.index');