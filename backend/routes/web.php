<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Auth;

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

Route::get('/', [UserController:: class, 'index']);

Route::post('/login', [UserController:: class, 'login']);

Auth::routes();


Route::get('/users', [UserController:: class, 'users']);
Route::get('/users/newuser', [UserController:: class, 'newuser']);
Route::post('/users/newuser/add', [UserController:: class, 'add']);

Route::get('/tickets', [TicketController:: class, 'tickets']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

