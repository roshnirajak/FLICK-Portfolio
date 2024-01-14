<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Route;

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
    return view('portfolio.index');
});

Route::get('/projects', function () {
    return view('portfolio.projects');
});
//Hire Me
Route::get('/job', function () {
    return view('portfolio.job');
});
Route::post('/job/store', [JobController::class, 'store'])
    ->name('job.store');

Route::get('/enroll', function () {
    return view('course/enroll_form');
});
Route::post('/enroll/store', [EnrollmentController::class, 'store'])
    ->name('enroll.store');


//Contact Me
Route::get('/contact', function () {
    return view('portfolio.contact');
});
Route::post('/contact/store', [ContactController::class, 'store'])
    ->name('contact');

Route::get('/course', function () {
    return view('course.course_details');
});
