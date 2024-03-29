<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarController; //TODO: Lo puedes encontrar en la clase de CarController.php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//TODO: Esto es un ejemplo, si es administrador. Se va a la página
/* Route::middleware(['admin'])->group(function () {
    Route::get('/autos', [CarController::class, 'index']);
}); */
Route::get('/', function () {
    return view('welcome');
});
//TODO: Lo colocamos la ruta de Car
Route::get('/autos', [CarController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Para la validación de usuario
Route::post('/register', [UserController::class,'registro']);
require __DIR__ . '/auth.php';
