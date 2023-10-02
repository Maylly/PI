<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
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

// Inicial
Route::get('/', [HomeController::class, 'index']);
// Inicial

// Projetos
Route::get('/projetos/acat', [EventController::class, 'index_acat']);
Route::get('/projetos/eco', [EventController::class, 'index_eco']);
// Projetos

// Eventos
Route::get('/eventos', [EventController::class, 'index']);
// Eventos

// Doação
Route::get('/doacao', function () {
    return view('doacao');
});
// Doação

// Jogos
Route::get('/jogos', function () {
    return view('games');
});
// Jogos

// Dashboard
Route::get('/dashboard/create/event', [EventController::class, 'create'])->middleware('auth');
Route::get('/dashboard/create/eco', [EventController::class, 'create_eco'])->middleware('auth');
Route::get('/dashboard/create/acat', [EventController::class, 'create_acat'])->middleware('auth');
Route::post('/dashboard/create', [EventController::class, 'store'])->middleware('auth');
// Dashboard

// Rotas de Redirecionamento
Route::get('/projetos', function () {
    return redirect('/');
});
Route::get('/user/profile', function () {
    return redirect('/');
});
// Rotas de Redirecionamento

// Rotas de login eu espero...
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Rotas de login eu espero...