<?php

use Illuminate\Support\Facades\Route;

//LOOK HERE you have to import this shit

use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'index'])->name('index');
Route::post('/', [StudentController::class,'create'])->name('create');


Route::get('/edit/{id}', [StudentController::class,'edit'])->name('edit');
Route::put('/edit/{id}', [StudentController::class,'update'])->name('update');


Route::get('/delete/{id}', [StudentController::class,'destroy'])->name('destroy');