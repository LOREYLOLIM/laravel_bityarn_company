<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employment', [App\Http\Controllers\EmployeesController::class, 'create'])->name('employment');
Route::get('/positions', [App\Http\Controllers\PositionsController::class, 'create'])->name('positions');
Route::get('/employeespositions', [App\Http\Controllers\EmployeesPositionsController::class, 'create'])->name('employeespositions');
Route::post('/employeedata', [App\Http\Controllers\EmployeesController::class, 'store'])->name('employeedata.store');
Route::post('/positiondata', [App\Http\Controllers\PositionsController::class, 'store'])->name('position.store');
Route::post('/employeepositiondata', [App\Http\Controllers\EmployeesPositionsController::class, 'store'])->name('employeepositiondata.store');

Route::get('/employeesview', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employeesview');
Route::get('/positionsview', [App\Http\Controllers\PositionsController::class, 'index'])->name('positionsview');
Route::get('/employeepositionview', [App\Http\Controllers\EmployeesPositionsController::class, 'index'])->name('employeepositionview');


