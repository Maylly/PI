<?php

use App\Http\Controllers\EventController;
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
Route::get('/', function () {
    return view('home');
});

Route::get('/eventos', [EventController::class, 'index']);

// Dashboard
Route::get('/dashboard/create/event', [EventController::class, 'create'])->middleware('auth');
Route::post('/dashboard/create', [EventController::class, 'store']);

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