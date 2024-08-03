<?php

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

Route::get('/', function () {
    return view('welcome');
});


// routes/web.php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::get('/custom-login', [CustomLoginController::class, 'showLoginForm'])->name('custom-login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/custom-login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/custom-login', 'Auth\LoginController@login');


Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');



Route::get('/login', function () {
    return view('auth.login');
})->name('login.show');
Route::post('/login', 'Auth\LoginController@login')->name('login.attempt');


// Route for displaying the registration form
Route::get('/register', function () {
    return view('auth.register');
})->name('register.show');

// Route for handling the registration form submission
Route::post('/register', 'Auth\RegisterController@register')->name('register.attempt');


// Route for the welcome page
Route::get('/', function () {
    return view('auth.welcome');
})->name('welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route for handling the login form submission
Route::post('/login', 'Auth\LoginController@login')->name('login.attempt');

// Example of handling login redirection after successful authentication
Route::middleware('auth')->group(function () {
    Route::get('/login', function () {
        // If user is authenticated, redirect to the dashboard
        return redirect()->route('dashboard');
    });
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login.show');


Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');



Route::get('/dashboard/profile', 'ProfileController@show')->name('profile.show');
Route::put('/dashboard/profile', 'ProfileController@update')->name('profile.update');


// routes/web.php

Route::get('/dashboard/profile', 'ProfileController@show')->name('profile.show');
Route::get('/dashboard/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/dashboard/profile/update', 'ProfileController@update')->name('profile.update');


//Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
// Define other routes for department CRUD operations


use App\Http\Controllers\DepartmentController;

Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/{id}', [DepartmentController::class, 'show']);


//use App\Http\Controllers\DepartmentController;

Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');

Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::put('/dashboard/profile/{id}', [ProfileController::class, 'update'])->name('dashboard.profile.update');


Route::get('/dashboard/attendance', 'App\Http\Controllers\DashboardController@attendance')->name('dashboard.attendance');

Route::get('/dashboard/attendance', 'App\Http\Controllers\AttendanceController@index')->name('attendance.index');


use App\Http\Controllers\AttendanceController;

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');

Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');

//Route::post('/attendance/index', 'AttendanceController@index')->name('attendance.index');


//use App\Http\Controllers\AttendanceController;

Route::get('attendance', [AttendanceController::class, 'showAttendanceForm']);
Route::post('attendance', [AttendanceController::class, 'storeAttendance']);


Route::get('/attendance', [AttendanceController::class, 'methodName']);
Route::get('/attendance', [AttendanceController::class, 'index']);

// routes/web.php

//use App\Http\Controllers\AttendanceController;

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');

Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances.index');

Route::post('/attendance/mark', [AttendanceController::class, 'mark'])->name('attendance.mark');
// In routes/web.php
Route::post('/attendance/store', [AttendanceController::class, 'store']);

use App\Http\Controllers\LeaveRequestController;

Route::get('/leave', 'LeaveRequestController@index')->name('leave.index');
Route::get('/leave/request', 'LeaveRequestController@create')->name('leave.create');
Route::post('/leave/request', 'LeaveRequestController@store')->name('leave.store');

//Route::get('/leave/create', [LeaveRequestController::class, 'create'])->nam('leave.create');
Route::post('/leave/store', [LeaveRequestController::class, 'store'])->name('leave.store');
Route::get('/leave/create', [LeaveRequestController::class, 'create'])->name('leave.create');
Route::get('/leave_requests/{id}/edit', 'LeaveRequestController@edit')->name('leave_requests.edit');
Route::delete('/leave_requests/{id}', 'LeaveRequestController@destroy')->name('leave_requests.destroy');

Route::get('/login', [LoginController::class, 'show'])->name('login.show');



use App\Http\Controllers\LeaveApprovalController;

Route::get('/leave/approvals', 'LeaveApprovalController@index')->name('leave.approvals');
Route::post('/leave/approve/{id}', 'LeaveApprovalController@approve')->name('leave.approve');
Route::post('/leave/reject/{id}', 'LeaveApprovalController@reject')->name('leave.reject');

use App\Http\Controllers\LeaveBalanceController;

Route::get('/leave/balance', 'LeaveBalanceController@index')->name('leave.balance');
Route::get('/leave-request', [LeaveRequestController::class, 'methodName']);

Route::get('/leave-requests', 'LeaveRequestController@index')->name('leave_requests.index');
//use App\Http\Controllers\LeaveBalanceController;

Route::get('/leave_balances', [LeaveBalanceController::class, 'index'])->name('leave_balances.index');
//use App\Http\Controllers\LeaveBalanceController;

Route::get('/leave_balances', [LeaveBalanceController::class, 'index'])->name('leave_balances.index');

// routes/web.php

Auth::routes();

Route::post('/register', 'Auth\RegisterController@register')->name('register.attempt');
Route::post('/login', 'Auth\LoginController@login')->name('login.attempt');

Route::get('/leave_requests/create', 'LeaveRequestController@create')->name('leave_requests.create');
Route::post('/leave_requests', 'LeaveRequestController@store')->name('leave_requests.store');
//Route::get('/leave/request', [LeaveController::class, 'showRequestForm'])->name('leave.request');

Route::get('/dashboard/leave', 'LeaveRequestController@index')->name('leave.index');

// web.php

//use App\Http\Controllers\AttendanceController;

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');




