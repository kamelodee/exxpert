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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jobs', [App\Http\Controllers\JobController::class, 'index'])->name('jobs');
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
Route::get('/exxperts', [App\Http\Controllers\ExxpertController::class, 'index'])->name('exxperts');
Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies');
