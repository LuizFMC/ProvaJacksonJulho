<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DietaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AssinaturaController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/treino/search', [TreinoController::class, "search"])->name('treino.search');
    Route::get('/treino/report/', [TreinoController::class, "report"])->name('treino.report');
    Route::get('/treino/chart', [TreinoController::class, "chart"])->name('treino.chart');
    Route::resource('treino', TreinoController::class);

    Route::post('/dieta/search', [DietaController::class, "search"])->name('dieta.search');
    Route::get('/dieta/report/', [DietaController::class, "report"])->name('dieta.report');
    Route::resource('dieta', DietaController::class);

    Route::post('/produto/search', [ProdutoController::class, "search"])->name('produto.search');
    Route::get('/produto/chart', [ProdutoController::class, "chart"])->name('produto.chart');
    Route::resource('produto', ProdutoController::class);


    Route::post('/assinatura/search', [AssinaturaController::class, "search"])->name('assinatura.search');
    Route::resource('assinatura', AssinaturaController::class);

    Route::post('/empresa/search', [EmpresaController::class, "search"])->name('empresa.search');
    Route::resource('empresa', EmpresaController::class);
    
});

require __DIR__.'/auth.php';
