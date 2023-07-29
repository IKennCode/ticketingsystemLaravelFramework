<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [UserController:: class, 'login'])->name('login');

Route::post('/loginprocess', [UserController:: class, 'loginprocess']);

// Route::get('/home', [UserController:: class, 'home'])->middleware('auth');

Route::get('/home', [UserController:: class, 'home'])->middleware('auth');

Route::get('/newuser', [UserController:: class, 'newuser'])->middleware('auth');

Route::post('/register_user', [UserController:: class, 'register_user'])->middleware('auth');

Route::get('/logout', [UserController:: class, 'logout']);

// Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/employee', [EmployeeController:: class, 'show']);

// Route::get('/login', [UserController:: class, 'login'])->name('login')->middleware('guest');


