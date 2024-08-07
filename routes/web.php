<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Admin Dashboard
Route::get('admin', function (){
    return view('dashboard');
});

// Admin Login
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'check_login'])->name('admin.check_login');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// RoomType Routes
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy'])->name('roomtype.delete');
Route::get('admin/roomtype/create', [RoomtypeController::class, 'create'])->name('roomtype.create');
Route::post('admin/roomtype/create', [RoomtypeController::class, 'store'])->name('roomtype.store');
Route::resource('admin/roomtype', RoomtypeController::class);
// Delete Room Type image
Route::get('admin/roomtypeimage/{id}/delete', [RoomtypeController::class, 'destroy_image'])->name('roomtypeimage.delete');

// Room Routes
Route::get('admin/room/{id}/delete', [RoomController::class, 'destroy'])->name('room.delete');
Route::get('admin/room/create', [RoomController::class, 'create'])->name('room.create');
Route::post('admin/room/create', [RoomController::class, 'store'])->name('room.store');
Route::resource('admin/room', RoomController::class);

// Customer Route
Route::get('admin/customer/{id}/delete', [CustomerController::class, 'destroy'])->name('customer.delete');
Route::get('admin/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('admin/customer/create', [CustomerController::class, 'store'])->name('customer.store');
Route::resource('admin/customer', CustomerController::class);

// Bookings Route
Route::get('admin/bookings/{id}/delete', [BookingController::class, 'destroy'])->name('bookings.delete');
Route::get('admin/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('admin/bookings/create', [BookingController::class, 'store'])->name('bookings.store');
Route::resource('admin/bookings', BookingController::class);

// Departments Route
Route::get('admin/departments/{id}/delete', [DepartmentController::class, 'destroy'])->name('departments.delete');
Route::get('admin/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('admin/departments/create', [DepartmentController::class, 'store'])->name('departments.store');
Route::resource('admin/departments', DepartmentController::class);

// Staffs Route
Route::get('admin/staff/{id}/delete', [StaffController::class, 'destroy'])->name('staff.delete');
Route::get('admin/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('admin/staff/create', [StaffController::class, 'store'])->name('staff.store');
Route::resource('admin/staff', StaffController::class);

// Services Route
Route::get('admin/service/{id}/delete', [ServiceController::class, 'destroy'])->name('service.delete');
Route::get('admin/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('admin/service/create', [ServiceController::class, 'store'])->name('service.store');
Route::resource('admin/service', ServiceController::class);

// Feedbacks Route
Route::get('admin/feedbacks', [AdminController::class, 'feedbacks']);
Route::get('admin/feedbacks/{id}/delete', [StaffController::class, 'destroy_feedback'])->name('destroy_feedback.delete');
