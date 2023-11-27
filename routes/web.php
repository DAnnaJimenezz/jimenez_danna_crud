<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;


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
    return view('layouts.app');
});

Route::get('/user', [UserController::class, 'User'])->name('user');
Route::get('/auth/create', [UserController::class, 'Create'])->name('auth.create');
Route::post('/user/store', [UserController::class, 'Store'])->name('user.store');
Route::get('/user/edit/{user}', [UserController::class,'Edit'])->name('user.edit');
Route::put('/user/update/{user}', [UserController::class,'Update'])->name('user.update');
Route::get('/user/show/{user}', [UserController::class,'Show'])->name('user.show');
Route::delete('/user/destroy/{user}', [UserController::class,'Destroy'])->name('user.destroy');

Route::get('/instructor', [InstructorController::class, 'Instructor'])->name('instructor');
Route::get('/instructor/create', [InstructorController::class, 'Create'])->name('instructor.create');
Route::post('/instructor/store', [InstructorController::class, 'Store'])->name('instructor.store');
Route::get('/instructor/edit/{instructor}', [InstructorController::class,'Edit'])->name('instructor.edit');
Route::put('/instructor/update/{instructor}', [InstructorController::class,'Update'])->name('instructor.update');
Route::get('/instructor/show/{instructor}', [InstructorController::class,'Show'])->name('instructor.show');
Route::delete('/instructor/destroy/{instructor}', [InstructorController::class,'Destroy'])->name('instructor.destroy');

Route::get('/role', [RoleController::class, 'Role'])->name('role');
Route::get('/role/create', [RoleController::class, 'Create'])->name('role.create');
Route::post('/role/store', [RoleController::class, 'Store'])->name('role.store');
Route::get('/role/edit/{role}', [RoleController::class,'Edit'])->name('role.edit');
Route::put('/role/update/{role}', [RoleController::class,'Update'])->name('role.update');
Route::get('/role/show/{role}', [RoleController::class,'Show'])->name('role.show');
Route::delete('/role/destroy/{role}', [RoleController::class,'Destroy'])->name('role.destroy');

Route::get('/recruiter', [RecruiterController::class, 'Recruiter'])->name('recruiter');
Route::get('/recruiter/create', [RecruiterController::class, 'Create'])->name('recruiter.create');
Route::post('/recruiter/store', [RecruiterController::class, 'Store'])->name('recruiter.store');
Route::get('/recruiter/edit/{recruiter}', [RecruiterController::class,'Edit'])->name('recruiter.edit');
Route::put('/recruiter/update/{recruiter}', [RecruiterController::class,'Update'])->name('recruiter.update');
Route::get('/recruiter/show/{recruiter}', [RecruiterController::class,'Show'])->name('recruiter.show');
Route::delete('/recruiter/destroy/{recruiter}', [RecruiterController::class,'Destroy'])->name('recruiter.destroy');

Route::get('/candidate', [CandidateController::class, 'Candidate'])->name('candidate');
Route::get('/candidate/create', [CandidateController::class, 'Create'])->name('candidate.create');
Route::post('/candidate/store', [CandidateController::class, 'Store'])->name('candidate.store');
Route::get('/candidate/edit/{candidate}', [CandidateController::class,'Edit'])->name('candidate.edit');
Route::put('/candidate/update/{candidate}', [CandidateController::class,'Update'])->name('candidate.update');
Route::get('/candidate/show/{candidate}', [CandidateController::class,'Show'])->name('candidate.show');
Route::delete('/candidate/destroy/{candidate}', [CandidateController::class,'Destroy'])->name('candidate.destroy');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('logout', [LogoutController::class, 'store'])->name('logout');
Route::post('login', [LoginController::class, 'store']);

Route::get('home', [HomeController::class, 'index'])->name('home.index');