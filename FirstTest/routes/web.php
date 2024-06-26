<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\courseController;

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
//Basic Routes
Route::get('/', [PagesController::class, 'home'])->name('home'); //name('home') this is naming route that means route er name diyechi

Route::get('/contact/public', [PagesController::class, 'contact'])->name('contact'); 
Route::get('/profile', [PagesController::class, 'myprofile'])->name('profile');

//Student Routes
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/create', [StudentController::class, 'createSubmit'])->name('student.create');

Route::get('/student/list', [StudentController::class, 'list'])->name('student.list');

Route::get('/student/edit/{id}/{name}', [StudentController::class, 'edit']);
Route::post('/student/edit', [StudentController::class,'editSubmit'])->name('student.edit');
Route::get('/student/delete/{id}/{name}', [StudentController::class,'delete']);


Route::get('/student/profile',[StudentController::class,'studentProfile'])->name('student.profile');

//Teacher Routes

Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/create', [TeacherController::class, 'createSubmit'])->name('teacher.create');
Route::get('/teacher/list', [TeacherController::class, 'list'])->name('teacher.list');

//Login part

Route::get('/login',[loginController::class, 'login'])->name('login');
Route::post('/login',[loginController::class, 'loginSubmit'])->name('login');
Route::get('/logout',[loginController::class, 'logout'])->name('logout');

//Teacher Dash

Route::get('/teacher/dash',[PagesController::class, 'teacherDash'])->name('teacherDash')->middleware('validTeacher');

// Teacher course

Route::get('/teacher/courses',[TeacherController::class,'teacherCourses'])->name('teacher.courses');

//course
Route::get('/courses',[courseController::class,'courseTeacher'])->name('teacher.courses');