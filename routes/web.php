<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

Route::fallback(function () {
    return redirect(Route('home'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADICIONAR TEMPLATE
Route::get('add-template', [TemplateController::class, 'create'])->name('Template.create');
Route::post('add-template', [TemplateController::class, 'store'])->name('Template.store');

// LISTA
Route::get('/templates', [TemplateController::class, 'list'])->name('templates.list');

// DELETAR
Route::delete('/templates/{template}', [TemplateController::class, 'destroy'])->name('templates.destroy');

// EDITAR
Route::get('/templates/{template}/edit', [TemplateController::class, 'edit'])->name('templates.edit');
Route::put('/templates/{template}', [TemplateController::class, 'update'])->name('templates.update');

Route::middleware(['auth'])->group(function () {

    Route::get('/teste/auth', function () {
        return "Esse é um exemplo de endpoint autenticado, em um cenário real apontar uma controller como o endpoint acima";
    });

});
