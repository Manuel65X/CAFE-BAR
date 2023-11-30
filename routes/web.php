<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;

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

    Route::get('/categorias', function () {
        return view("categorias.index");
    })->name("categorias.index");

    Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');

    Auth::routes(['register' => false, 'reset' => false]);

    Route::resource('user', UserController::class)->middleware('auth');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/categorias/create', [CategoriaController::class, 'create']);
        Route::get('/events', function () {
            return view("events.eventos");
        })->name("events.eventos");

        Route::get('/bookings', function () {
            return view("bookings.reserva");
        })->name("bookings.reserva");

        Route::post('categorias/{categoria}', function ($categoria) {
            return "Procesando productos en la categoría: $categoria";
        })->name('productos.procesar');
    });
});

require __DIR__.'/auth.php';