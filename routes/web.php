<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('guest')->group(function(){
    
    Route::redirect('/', 'login');

});


Route::middleware('auth')->group(function (){

    // Company Routes

    Route::get('/companies', [CompaniesController::class, 'index'])-> name('companies.index');

    Route::post('/companies', [CompaniesController::class, 'store'])-> name('companies.store');

    Route::get('/companies/create', [CompaniesController::class, 'create'])->name('companies.create');

    Route::get('/companies/{id}', [CompaniesController::class, 'show'])->name('companies.show');

    Route::get('/companies/{id}/edit', [CompaniesController::class, 'edit'])->name('companies.edit');

    Route::put('/companies/{id}', [CompaniesController::class, 'update'])->name('companies.update');

    Route::delete('/companies/{id}', [CompaniesController::class, 'destroy'])->name('companies.destroy');

    
    
    Route::get('/employees', [EmployeesController::class, 'index'])-> name('employees.index');

    Route::post('/employees', [EmployeesController::class, 'store'])-> name('employees.store');

    Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');

    Route::get('/employees/{id}', [EmployeesController::class, 'show'])->name('employees.show');

    Route::put('/employees/{id}', [EmployeesController::class, 'update'])->name('employees.update');

    Route::delete('/employees/{id}', [EmployeesController::class, 'destroy'])->name('employees.destroy');

    Route::get('/employees/{id}/edit', [EmployeesController::class, 'edit'])->name('employees.edit');
});



Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
