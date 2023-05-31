<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\JobSeekerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// ? Route server side
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/employers', fn () => view('server-side.employers'))->name('employers');
    Route::get('/jobseekers', fn () => view('server-side.jobseekers'))->name('jobseekers');
    // Route::get('/jobseekers/index', [JobSeekerController::class, 'index'])->name('jobseeker.index');
    // Route::get('/jobseekers/edit/{id}', [JobSeekerController::class, 'edit'])->name('jobseeker.edit');
    Route::resource('/jobseeker', JobSeekerController::class);
    Route::resource('/employer', EmployersController::class);
    Route::resource('/job', JobController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';