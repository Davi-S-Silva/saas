<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Mail\ContactController;
use Illuminate\Support\Facades\Route;

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


    Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact',[ContactController::class, 'store'])->name('contact.store');

});

require __DIR__.'/auth.php';
