<?php

use App\Http\Controllers\ProfileController;
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

Route::view('/', 'welcome') -> name('welcome');



Route::middleware('auth')->group(function () {
    //middleware auth: verifica si el usuario esta autenticado o ha hecho login con anterioridad
    //Si no esta autenticado lo redirecciona a log in
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/categorias', function(){
        return view("categorias.index");
    })->name("categorias.index");

    Route::get('/events', function(){
        return view("events.eventos");
    })->name("events.eventos");

    Route::get('/bookings', function(){
        return view("bookings.reserva");
    })->name("bookings.reserva");

    Route::post('categorias/{{categoria}}', function($categoria){
        return "Procesando productos... $categoria";
    });
});

require __DIR__.'/auth.php';
