<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\JobTitleController;
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
Route::post('/users/search', [UserController:: class, 'search']);
Route::post('/users/user', [UserController::class, 'user']);

// TICKETS CONTROLLER
Route::get('/tickets', [TicketController:: class, 'tickets'])->middleware('auth');
Route::get('/alltickets', [TicketController:: class, 'tickets'])->middleware('auth');
Route::get('/tickets/mytickets', [TicketController:: class, 'mytickets'])->middleware('auth');
Route::get('/tickets/createticket', [TicketController::class, 'newticket'])->middleware('auth');
Route::post('/tickets/createticket/save', [TicketController::class, 'addticket'])->middleware('auth');
Route::get('/tickets/newtickets', [TicketController::class, 'newtickets']);
Route::get('/tickets/opentickets', [TicketController::class, 'opentickets']);
Route::get('/tickets/resolvedtickets', [TicketController::class, 'resolvedtickets']);
Route::get('/tickets/closedtickets', [TicketController::class, 'closedtickets']);
Route::get('/tickets/cancelledtickets', [TicketController::class, 'cancelledtickets']);
Route::post('/tickets/viewticket/{ticket_id}/{viewer_id}', [TicketController::class, 'viewticket']);
Route::post('/tickets/acknowledge', [TicketController::class, 'ack_ticket']);
Route::post('/tickets/search', [TicketController::class, 'search']);
Route::post('/tickets/cancel', [TicketController::class, 'cancel']);
Route::post('/tickets/resolve', [TicketController::class, 'resolve']);

//DEPARTMENTS CONTROLLER
Route::get('/departments', [DepartmentController::class, 'departments']);
Route::post('/departments/savedepartment', [DepartmentController::class, 'savedepartment']);

//JOB TITLES CONTROLLER
Route::get('/jobtitles', [JobTitleController::class, 'jobtitles']);
Route::post('/jobtitles/save', [JobTitleController::class, 'savejobtitle']);


// Route::get('/test', function(){
//     print_r($request->session()->get('key'));
// });



