<?php

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/data-user', function () {
    return view('admin.data-user');
})->middleware(['auth', 'verified'])->name('admin.data-user');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::resource('kriteria', KriteriaController::class)
        ->names([
            'index' => 'admin.kriteria.index',
            'create' => 'admin.kriteria.create',
            'store' => 'admin.kriteria.store',
            'edit' => 'admin.kriteria.edit',
            'update' => 'admin.kriteria.update',
            'destroy' => 'admin.kriteria.destroy',
        ])
        ->parameters(['kriteria' => 'id']);
});

Route::get('/hasil', function () {
    return view('admin.hasil');
})->middleware(['auth', 'verified'])->name('admin.hasil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__.'/auth.php';