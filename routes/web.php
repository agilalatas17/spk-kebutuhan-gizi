<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/dashboard/data-user', [UserController::class, 'show'])->middleware(['auth', 'verified'])->name('admin.data-user');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::resource('/dashboard/kriteria', KriteriaController::class)
        ->names([
            'index' => 'admin.kriteria.index',
            'create' => 'admin.kriteria.create',
            'store' => 'admin.kriteria.store',
            'edit' => 'admin.kriteria.edit',
            'update' => 'admin.kriteria.update',
            'destroy' => 'admin.kriteria.destroy',
    ])->parameters(['kriteria' => 'id'])->except(['shows']);

    Route::resource('/dashboard/makanan', MakananController::class)
        ->names([
            'index' => 'admin.makanan.index',
            'create' => 'admin.makanan.create',
            'store' => 'admin.makanan.store',
            'edit' => 'admin.makanan.edit',
            'update' => 'admin.makanan.update',
            'destroy' => 'admin.makanan.destroy',
    ])->except(['show']);

    Route::resource('/dashboard/penilaian', PenilaianController::class)
        ->names([
            'index' => 'admin.penilaian.index',
            'store' => 'admin.penilaian.store',
    ])->except(['destroy', 'update', 'show', 'edit', 'create']);
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