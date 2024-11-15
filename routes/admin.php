<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController; 
use App\Http\Controllers\SalaryController; 
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin Controller 
Route::get('/login',[AdminController::class,'index'])->name('admin.index');
Route::post('/login',[AdminController::class,'login_admin'])->name('admin.login');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');


// Employee Controller 
Route::get('/add',[EmployeeController::class,'add'])->name('employee.add');
Route::post('/add',[EmployeeController::class,'insert'])->name('employee.insert');
Route::get('/list',[EmployeeController::class,'list'])->name('employee.list');
Route::get('/view/{id}',[EmployeeController::class,'show'])->name('employee.show');
Route::get('/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::post('/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');

//Salary Controller
Route::get('/salary',[SalaryController::class,'create_salary'])->name('employee.salary');
Route::post('/salary-show',[SalaryController::class,'insert_salary'])->name('total.salary');
Route::get('/calculate-salary',[SalaryController::class,'calculate_salary'])->name('calculate.salary');
