<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;

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
    return view('student');
});
Route::post('student-add', [StudentController::class, 'student_add']);
Route::get('student-view', [StudentController::class, 'student_view']);
Route::get('student-delete', [StudentController::class, 'student_delete']);
Route::post('student-edit', [StudentController::class, 'student_edit']);
Route::get('student-list', [StudentController::class, 'student_list']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
