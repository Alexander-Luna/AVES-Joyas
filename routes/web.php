<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/productos', [DashboardController::class, 'index'])->name('productos.index'); // Lista de productos
Route::get('/producto/{id}', [DashboardController::class, 'show'])->name('producto.show'); // Detalle de producto

Route::get('/login', [DashboardController::class, 'showLoginForm'])->name('login.show'); // Formulario de login
Route::post('/login', [DashboardController::class, 'login'])->name('login'); // Procesar login
Route::get('/registro', [DashboardController::class, 'showRegisterForm'])->name('register.show'); // Formulario de registro
Route::post('/registro', [DashboardController::class, 'register'])->name('register'); // Procesar registro

Route::get('/checkout', [DashboardController::class, 'index'])->name('checkout.index'); // Vista de checkout
Route::post('/checkout', [DashboardController::class, 'process'])->name('checkout.process'); // Procesar checkout