<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/employee/add',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::get('/employee/{id}',[EmployeeController::class,'show'])->name('employee.show');
Route::get('/employee/update/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::delete('/employee/delete/{id}',[EmployeeController::class,'destroy'])->name('employee.destroy');
Route::post('/employee',[EmployeeController::class,'search'])->name('employee.search');
