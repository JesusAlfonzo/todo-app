<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Tasks\TaskController;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

// -- LANDING PAGE --
Route::get('/', function () {
    return view('welcome');
});

// -- REGISTER --
Route::get('/register', [RegisterController::class, 'create'])->name('register'); // -> Register Form View
Route::post('/register', [RegisterController::class, 'store'])->name('register.store'); // -> Register User

// -- LOGIN --
Route::get('/login', [LoginController::class, 'create'])->name('login'); // -> Login Form View
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); // -> Login User

// -- Flujio App (Auth Routes) --
Route::middleware('auth')->group(function () {

    // -- Dashboard --
    Route::get('/home', [DashboardController::class, 'index'])->name('home.index'); // -> Dashboard User

    // -- Logout --
    Route::post('/logout', [LoginController::class, 'destroy'])->name('login.destroy'); // -> Logout - Delete Session

    // -- TASKS --
    // Route::get('/task', [TaskController::class, 'index'])->name('task.index'); // -> Tasks Index (No using)
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create'); // -> Create Task Form view
    Route::post('/task', [TaskController::class, 'store'])->name('task.store'); // -> Store Task
    Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit'); // -> Edit Task
    Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update'); // -> Update Task
    Route::get('/task/{id}/show', [TaskController::class, 'show'])->name('task.show'); // -> Show Task
    Route::get('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy'); // -> Destroy - Delete Task

    // -- PROFILE (User Info) --

    Route::get('/profile', [UserController::class, 'index'])->name('profile.index'); // -> Profile Index 
    Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->name('profile.edit'); // -> Edit Profile
    Route::put('/profile/{id}', [UserController::class, 'update'])->name('profile.update'); // -> Update Profile
    Route::get('/profile/{id}', [UserController::class, 'destroy'])->name('profile.destroy'); // -> Destroy - Delete User
});
