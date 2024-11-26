<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentsController::class,'index',])->name(name: 'students.index');

Route::get('/create',[StudentsController::class,'create',])->name(name: 'students.create');

Route::get('/store',[StudentsController::class,'store',])->name(name: 'students.store');

Route::get('/{id}',[StudentsController::class,'show',])->name(name: 'students.show');

Route::get('/{id}/edit',[StudentsController::class,'edit',])->name(name: 'students.edit ');

Route::put('/{id}',[StudentsController::class,'update',])->name(name: 'students.update ');

Route::delete('/{id}',[StudentsController::class,'delete',])->name(name: 'students.destroy ');