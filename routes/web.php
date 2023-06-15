<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\UserJobSeekerController;

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
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/list-user', [DashboardController::class, 'dataPengguna'])->name('list.user');
        Route::get('/list-employers', [DashboardController::class, 'dataEmployers'])->name('list.employers');
        Route::get('/list-jobseekers', [DashboardController::class, 'dataJobSeekers'])->name('list.jobseekers');
        Route::get('/list-jobs', [DashboardController::class, 'dataJobs'])->name('list.jobs');
        // Route::resource('/jobseeker', JobSeekerController::class);
        // Route::resource('/job', JobController::class)->scoped();
    });
    
    Route::resource('/employer', EmployersController::class);
    Route::resource('/job', JobController::class);
    Route::get('/profile-employer', [EmployersController::class, 'profile'])->name('profile.employer');
    Route::get('/profile-jobseeker', [UserJobSeekerController::class, 'jobSeekerProfile'])->name('profile.jobseeker');
    Route::get('/profile-jobseeker/create', [UserJobSeekerController::class, 'create'])->name('profile.jobseeker.create');
    Route::post('/add', [UserJobSeekerController::class, 'store'])->name('profile.jobseeker.store');
    Route::get('/resume', [UserJobSeekerController::class, 'resume'])->name('profile.jobseeker.resume');
    Route::put('/edit', [UserJobSeekerController::class, 'uploadResume'])->name('upload.resume');
    Route::get('/resume/download/{id}', [UserJobSeekerController::class, 'downloadResume'])->name('resume.download');


    // Route::get('/employers', fn () => view('server-side.employers'))->name('employers');
    // Route::get('/jobseekers', fn () => view('server-side.jobseekers'))->name('jobseekers');
    // Route::get('/jobseekers/index', [JobSeekerController::class, 'index'])->name('jobseeker.index');
    // Route::get('/jobseekers/edit/{id}', [JobSeekerController::class, 'edit'])->name('jobseeker.edit');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';