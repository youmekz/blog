<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'index'])->name('admin.index');

Route::get('/', [AdminController::class, 'create'])->name('admin.create');
