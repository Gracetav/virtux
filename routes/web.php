<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/Dashboard',[HomeController::class,'index'])->
    middleware(['auth','admin'])

;

route::get('view_category',[AdminController::class,'view_category'])->
    middleware(['auth','admin'])

;

    Route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');
    Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
;
