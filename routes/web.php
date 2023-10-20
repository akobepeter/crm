<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleManagerController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EditCustomersController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\EditUserController;








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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[RegisterController::class,'index'])->name('register');

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/reset-password',[ResetPasswordController::class,'index'])->name('password.index');


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/user-profile',[UserProfileController::class,'index'])->name('user-profile');

Route::get('/accounting',[AccountingController::class,'index'])->name('accounting');


Route::get('/employee', [EmployeeController::class,'index'])->name('employee');

Route::get('/project',[ProjectController::class,'index'])->name('project');

Route::get('/role-manager',[RoleManagerController::class,'index'])->name('role-manager');


Route::get('/customers',[CustomersController::class,'index'])->name('customers');

Route::get('/edit-customer',[EditCustomersController::class,'index'])->name('edit_customers');
Route::get('/activity',[ActivityController::class,'index'])->name('activity');
Route::get('/task',[taskController::class,'index'])->name('task');
Route::get('/leave',[LeaveController::class,'index'])->name('leave');

Route::get('/reports',[ReportsController::class,'index'])->name('reports');

Route::get('/edit-user-profile',[EditUserController::class,'index'])->name('edit-user-profile');

