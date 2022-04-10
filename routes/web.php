<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Employee\EmployeeDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


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

Route::get('/', HomeComponent::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// For Employees
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/employee/dashboard',EmployeeDashboardComponent::class)->name("employee.dashboard");
    Route::get('/employee/users',[EmployeeDashboardComponent::class , "users"])->name("employee.users");

});

// For Admins
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name("admin.dashboard");
});

Route::post('/admin/new', [UserController::class, "NewUser"])->name("NewUser");

Route::post('/employee/new', [UserController::class, "NewCustomer"])->name("NewCustomer");
