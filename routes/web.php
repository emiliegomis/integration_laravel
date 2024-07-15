<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarchandiseController;



Route::get('/', function () {
    return view('marchandise');
})->name('marchandise');

Route::get('/marchandises', [MarchandiseController::class, 'index'])->middleware(['auth', 'verified'])->name('marchandises.index');
Route::middleware(['auth'])->group(function () {
    Route::get('/marchandises/create', [MarchandiseController::class, 'create'])->name('marchandises.create');
    Route::post('/marchandises', [MarchandiseController::class, 'store'])->name('marchandises.store');
    Route::get('/marchandises/{marchandise}', [MarchandiseController::class, 'show'])->name('marchandises.show');
    
    Route::get('/marchandises/{marchandise}/edit', [MarchandiseController::class, 'edit'])->name('marchandises.edit');
    Route::put('/marchandises/{id}', [MarchandiseController::class, 'update'])->name('marchandises.update');
    Route::delete('/marchandises/{marchandise}', [MarchandiseController::class, 'destroy'])->name('marchandises.destroy');
});


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); 
})->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

