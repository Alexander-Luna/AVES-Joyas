<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/wishlist', [DashboardController::class, 'viewWishlist'])->name('wishlist.index');


Route::get('/login', [DashboardController::class, 'showLoginForm'])->name('login.show'); // Formulario de login
Route::post('/login', [DashboardController::class, 'login'])->name('login'); // Procesar login
Route::get('/registro', [DashboardController::class, 'showRegisterForm'])->name('register.show'); // Formulario de registro
Route::post('/registro', [DashboardController::class, 'register'])->name('register'); // Procesar registro

Route::get('/checkout', [DashboardController::class, 'viewCheckout'])->name('checkout.index'); // Vista de checkout
Route::post('/checkout', [DashboardController::class, 'process'])->name('checkout.process'); // Procesar checkout



Route::get('/producto/{id}', [ProductController::class, 'show'])->name('producto.show'); // Detalle de producto
Route::get('/productos', [ProductController::class, 'index'])->name('products.index');
Route::get('/productos/crear', [ProductController::class, 'create'])->name('products.create');
Route::post('/productos', [ProductController::class, 'store'])->name('products.store');
Route::post('/inventario/{productId}', [InventoryController::class, 'addInventory'])->name('inventory.add');
Route::post('/checkout/{productId}', [OrderController::class, 'checkout'])->name('orders.checkout');
