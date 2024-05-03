<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\StudentClassController;
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
    Route::prefix('department')->as('department.')->group(function(){
        Route::get('/',[DepartmentController::class,'index'])->name('index');
        Route::get('create',[DepartmentController::class,'create'])->name('create');
        Route::post('store',[DepartmentController::class,'store'])->name('store');
        Route::get('edit/{id}',[DepartmentController::class,'edit'])->name('edit');
        Route::get('show/{id}',[DepartmentController::class,'show'])->name('show');
        Route::put('update/{id}',[DepartmentController::class,'update'])->name('update');
    });
    Route::prefix('section')->as('section.')->group(function(){
        Route::get('/',[SectionController::class,'index'])->name('index');
        Route::get('create',[SectionController::class,'create'])->name('create');
        Route::post('store',[SectionController::class,'store'])->name('store');
        Route::get('edit/{id}',[SectionController::class,'edit'])->name('edit');
        Route::get('show/{id}',[SectionController::class,'show'])->name('show');
        Route::put('update/{id}',[SectionController::class,'update'])->name('update');
    });
    Route::prefix('class')->as('class.')->group(function(){
        Route::get('/',[StudentClassController::class,'index'])->name('index');
        Route::get('create',[StudentClassController::class,'create'])->name('create');
        Route::post('store',[StudentClassController::class,'store'])->name('store');
        Route::get('edit/{id}',[StudentClassController::class,'edit'])->name('edit');
        Route::get('show/{id}',[StudentClassController::class,'show'])->name('show');
        Route::put('update/{id}',[StudentClassController::class,'update'])->name('update');
    });
});
