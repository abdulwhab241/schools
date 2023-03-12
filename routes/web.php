<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;

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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [HomeController::class, 'dashboard']) -> name('dashboard');

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('Grades', GradeController::class);
});

//==============================Classrooms============================
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('Classrooms', ClassroomController::class);
    Route::post('delete_all', [ClassroomController::class,'delete_all'])->name('delete_all');
    Route::post('Filter_Classes', [ClassroomController::class,'Filter_Classes'])->name('Filter_Classes');
});

//==============================Sections============================
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('Sections', SectionController::class);
    Route::get('/classes/{id}', [SectionController::class, 'get_classes']);
});

//==============================Teachers============================
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('Teachers', TeacherController::class);
});

//==============================Fees============================
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('Fees',  FeeController::class);
});