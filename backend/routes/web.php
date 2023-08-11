<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

// LOGIN CONTROLLERS
Route::get('/', [LoginController:: class, 'index'])->name('login');
Route::post('/login', [LoginController:: class, 'authenticate']);
Route::post('/logout', [LoginController:: class, 'logout']);

//DASHBOARD CONTROLLERS
Route::get('/dashboard', [DashboardController:: class, 'dashboard'])->middleware('auth');

// USER CONTROLLERS
Route::get('/users', [UserController:: class, 'users']);
Route::get('/users/newuser', [UserController:: class, 'newuser']);
Route::post('/users/newuser/add', [UserController:: class, 'add']);

// TICKETS CONTROLLER
Route::get('/tickets', [TicketController:: class, 'tickets']);


Route::get('/test', function(){
    print_r($request->session()->get('key'));
});



