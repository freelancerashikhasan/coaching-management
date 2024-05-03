<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;

Route::get('get/departments',[AjaxController::class, 'getDepartments'])->name('get.departments');
Route::get('get/sections',[AjaxController::class, 'getSections'])->name('get.sections');
Route::get('get/classes',[AjaxController::class, 'getClasses'])->name('get.classes');
