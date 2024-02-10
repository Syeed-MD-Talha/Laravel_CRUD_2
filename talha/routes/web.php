<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/view', [CrudController::class, 'index'])->name('view_page');
Route::get('/create', [CrudController::class, 'create'])->name('first_page');
Route::post('', [CrudController::class, 'store'])->name('storePage');
Route::patch('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [CrudController::class, 'update'])->name('update');
Route::delete('/{id}', [CrudController::class, 'destroy'])->name('Delete');

