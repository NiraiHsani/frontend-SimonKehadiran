<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');