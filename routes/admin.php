<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;


Route::prefix('admin')->as('admin.')->middleware('auth')->group(function(){
    Route::prefix('student')->as('student.')->group(function(){
        Route::get('/',[StudentController::class,'index'])->name('index');
        Route::get('create',[StudentController::class,'create'])->name('create');
        Route::post('store',[StudentController::class,'store'])->name('store');
        Route::get('edit/{id}',[StudentController::class,'edit'])->name('edit');
        Route::get('show/{id}',[StudentController::class,'show'])->name('show');
        Route::put('update/{id}',[StudentController::class,'update'])->name('update');
    });
});
