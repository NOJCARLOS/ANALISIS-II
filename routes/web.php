<?php

use App\Http\Controllers\UbicacionController;
use App\Livewire\Crearubicacion;
use App\Livewire\Ubicaciones;
use App\Models\Ubicacion;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/usuarios', function () {return view('usuarios');})->name('usuarios');
    Route::get('/ubicaciones', [UbicacionController::class, 'index'])->name('ubicaciones');
    Route::get('/incidentes', function () {return view('incidentes');})->name('incidentes');
    Route::get('/configuraciones', function () {return view('configuraciones');})->name('configuraciones');
   
});

