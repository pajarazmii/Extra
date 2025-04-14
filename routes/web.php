<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Pembina\PembinaController;
use App\Http\Controllers\Ketua\KetuaController;
use Illuminate\Support\Facades\Route;

//route admin
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('admin/eskul', [AdminController::class, 'eskul'])->name('eskul');
Route::get('admin/eskul/create', [AdminController::class, 'create_eskul'])->name('create.eskul');
Route::get('admin/pengguna', [AdminController::class, 'pengguna'])->name('pengguna');
Route::get('admin/pengguna/create', [AdminController::class, 'create_pengguna'])->name('create.pengguna');

//route pembina
Route::get('pembina', [PembinaController::class, 'index'])->name('pembina');

//route ketua
Route::get('ketua', [KetuaController::class, 'index'])->name('ketua');

//route user
Route::get('/', [UserController::class, 'index'])->name('user');
Route::get('user/list_eskul', [UserController::class, 'list_eskul'])->name('list.eskul');


