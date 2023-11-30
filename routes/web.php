<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    // Middleware auth: verifica si el usuario está autenticado o ha hecho login con anterioridad
    // Si no está autenticado lo redirecciona a log in

    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 
    Route::get('/productos', function () {
        return view("Productos.productos");
    })->name("Productos.productos");

    Auth::routes(['register' => false, 'reset' => false]);

    Route::resource('user', UserController::class)->middleware('auth');

    Route::group(['middleware' => 'auth'], function () {
        
        Route::get('/events', function () {
            return view("events.eventos");
        })->name("events.eventos");

        Route::get('/bookings', function () {
            return view("bookings.reserva");
        })->name("bookings.reserva");

        
    });
});
