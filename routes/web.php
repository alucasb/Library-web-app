<?php

use App\Http\Controllers\LibController;
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

//home
Route::get('/', [LibController::class, 'index']);

//adicionar obra
Route::get('/items/add', [LibController::class, 'add']);

//visualização das informações do item 
Route::get('/items/{id}', [LibController::class, 'item']);

//edição das informações do item 
Route::get('/items/edit/{id}', [LibController::class, 'edit']);

//gargar os items
Route::post('/items', [LibController::class, 'store']);

//meus items
Route::get('/bib', [LibController::class, 'bib']);

//editar informações de im item já estando logado 
Route::put('/items/update/{id}', [LibController::class, 'update']);

//deletar um item
Route::delete('/items/{id}', [LibController::class, 'delete']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
