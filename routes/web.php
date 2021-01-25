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
Route::get('/performance/create', [App\Http\Controllers\PerformanceController::class, 'create'])->name('performance.create');
Route::post('/performance/store', [App\Http\Controllers\PerformanceController::class, 'store'])->name('performance.store');
Route::post('/performance/show', [App\Http\Controllers\PerformanceController::class, 'show'])->name('performance.show');
Route::post('/student/show', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show');
Route::get('/student/barchart', [App\Http\Controllers\StudentController::class, 'barchart'])->name('student.barchart');
Route::post('/ploAchieveView/barchart', [App\Http\Controllers\Plo_trackController::class, 'barchart'])->name('plo_track.barchart');
Route::post('/CourseView/barchart', [App\Http\Controllers\CourseController::class, 'barchart'])->name('course.barchart');
Route::get('/performance/all', [App\Http\Controllers\PerformanceController::class, 'allShow'])->name('performance.allShow');
Route::get('/create/co', [App\Http\Controllers\COMapController::class, 'createCO'])->name('create.createCO');
//Route::get('/student/barchart', 'BarchartController@barchart');
Route::post('/department/show', [App\Http\Controllers\DepartmentController::class, 'show'])->name('department.show');
Route::post('/ploAchievement/show', [App\Http\Controllers\Plo_trackController::class, 'show'])->name('plo_track.show');
Route::get('/overall/showAll', [App\Http\Controllers\StudentController::class, 'showAll'])->name('overall.showAll');

Route::get('/performance/bcreate', [App\Http\Controllers\PerformanceController::class, 'bcreate'])->name('performance.bcreate');
Route::post('/performance/ploStore', [App\Http\Controllers\PerformanceController::class, 'ploStore'])->name('performance.ploStore');
