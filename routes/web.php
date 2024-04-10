<?php

use App\Http\Controllers\colaboradorController;
use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Portfolio/Index');
});
/*
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', fn () => Inertia::render('Dashboard'))->name('dashboard');
});
*/

//rotas
Route::middleware(['auth:sanctum', 'verified'])->controller(colaboradorController::class)->group(function () {
    Route::get('/colaboradores', 'index')->name('colaborador.index');
    Route::post('/pesquisar/colaborador', 'pesquisarColaborador')->name('colaborador.pesquisar');
    Route::get('/visualizar/colaborador', 'show')->name('colaborador.show');
    Route::post('/cadastrar/colaborador', 'store')->name('colaborador.store');
    Route::post('/editar/colaborador', 'update')->name('colaborador.update');
    Route::post('/deletar/colaborador', 'delete')->name('colaborador.delete');
});


Route::middleware(['auth:sanctum', 'verified'])->controller(TarefasController::class)->group(function () {
    Route::get('/tarefas', 'index')->name('tarefa.index');
    Route::post('/cadastrar/tarefa', 'store')->name('tarefa.store');
});


Route::get('/portfolio', function () {
    return Inertia::render('Portfolio/Index');
});
Route::get('/portfolio/landing', function () {
    return Inertia::render('Portfolio/Landing');
})->name('portfolio.landing');;



