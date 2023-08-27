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
Route::get('/users', [UserController:: class, 'users'])->middleware('auth');
Route::get('/users/newuser', [UserController:: class, 'newuser'])->middleware('auth');
Route::post('/users/newuser/add', [UserController:: class, 'add'])->middleware('auth');
Route::post('/users/search', [UserController:: class, 'search'])->middleware('auth');
Route::post('/users/user', [UserController::class, 'user'])->middleware('auth');

// TICKETS CONTROLLER
Route::get('/tickets', [TicketController:: class, 'tickets'])->middleware('auth');
Route::get('/alltickets', [TicketController:: class, 'tickets'])->middleware('auth');
Route::get('/tickets/mytickets', [TicketController:: class, 'mytickets'])->middleware('auth');
Route::get('/tickets/createticket', [TicketController::class, 'newticket'])->middleware('auth');
Route::post('/tickets/createticket/save', [TicketController::class, 'addticket'])->middleware('auth');
Route::get('/tickets/newtickets', [TicketController::class, 'newtickets'])->middleware('auth');
Route::get('/tickets/opentickets', [TicketController::class, 'opentickets'])->middleware('auth');
Route::get('/tickets/resolvedtickets', [TicketController::class, 'resolvedtickets'])->middleware('auth');
Route::get('/tickets/closedtickets', [TicketController::class, 'closedtickets'])->middleware('auth');
Route::get('/tickets/cancelledtickets', [TicketController::class, 'cancelledtickets'])->middleware('auth');
Route::post('/tickets/viewticket/{ticket_id}/{viewer_id}', [TicketController::class, 'viewticket'])->middleware('auth');
Route::post('/tickets/acknowledge', [TicketController::class, 'ack_ticket'])->middleware('auth');
Route::post('/tickets/search', [TicketController::class, 'search'])->middleware('auth');
Route::post('/tickets/cancel', [TicketController::class, 'cancel'])->middleware('auth');
Route::post('/tickets/resolve', [TicketController::class, 'resolve'])->middleware('auth');

//DEPARTMENTS CONTROLLER
Route::get('/departments', [DepartmentController::class, 'departments'])->middleware('auth');
Route::post('/departments/savedepartment', [DepartmentController::class, 'savedepartment'])->middleware('auth');

//JOB TITLES CONTROLLER
Route::get('/jobtitles', [JobTitleController::class, 'jobtitles'])->middleware('auth');
Route::post('/jobtitles/save', [JobTitleController::class, 'savejobtitle'])->middleware('auth');


// Route::get('/test', function(){
//     print_r($request->session()->get('key'));
// });



