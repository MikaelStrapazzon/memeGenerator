<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return redirect(Route('home'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/teste/auth', function () {
        return "Esse é um exemplo de endpoint autenticado, em um cenário real apontar uma controller como o endpoint acima";
    });

});
