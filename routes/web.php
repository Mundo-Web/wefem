<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/quiz', function () {
    return view('cuestionario');
});

Route::get('/como-usar', function () {
    return view('comousar');
});
Route::get('/catalogo', function () {
    return view('catalogo');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/producto', function () {
    return view('producto');
});
Route::get('/checkout', function () {
    return view('Checkout');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
