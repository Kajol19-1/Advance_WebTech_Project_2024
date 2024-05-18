<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

