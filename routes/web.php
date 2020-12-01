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

Route::get('/dashboard', [App\Http\Controllers\dashboard\DashboardController::class, 'index'])->name('dashboard');

// task route
Route::get('/manage-task', [App\Http\Controllers\dashboard\TasksController::class, 'index'])->name('manage.task');
Route::get('/create-task', [App\Http\Controllers\dashboard\TasksController::class, 'create'])->name('task.create');
Route::get('/manage-bidders', [App\Http\Controllers\dashboard\TasksController::class, 'manage_bidder'])->name('manage.bidders');
Route::get('/active-bids', [App\Http\Controllers\dashboard\TasksController::class, 'active_bids'])->name('active.bids');
// jobs route
Route::get('/manage-jobs', [App\Http\Controllers\dashboard\JobsController::class, 'index'])->name('manage.jobs');
Route::get('/create-job', [App\Http\Controllers\dashboard\JobsController::class, 'create'])->name('job.create');
Route::get('/manage-candidate', [App\Http\Controllers\dashboard\JobsController::class, 'manage_candidate'])->name('manage.candidate');

// messages route
Route::get('/messages', [App\Http\Controllers\dashboard\MessagesController::class, 'index'])->name('messages');
// settings
Route::get('/settings', [App\Http\Controllers\dashboard\SettingsController::class, 'index'])->name('settings');
// reviews
Route::get('/reviews', [App\Http\Controllers\dashboard\ReviewsController::class, 'index'])->name('reviews');
// bookmarks
Route::get('/bookmarks', [App\Http\Controllers\dashboard\BookmarkController::class, 'index'])->name('bookmarks');


