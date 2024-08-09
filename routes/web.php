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
Route::delete('admin/selected-roomtype', [RoomtypeController::class, 'deleteAll'])->name('roomtype.delete');
// Delete Room Type image
Route::get('admin/roomtypeimage/{id}/delete', [RoomtypeController::class, 'destroy_image'])->name('roomtypeimage.delete');

// Room Routes
Route::get('admin/room/{id}/delete', [RoomController::class, 'destroy'])->name('room.delete');
Route::get('admin/room/create', [RoomController::class, 'create'])->name('room.create');
Route::post('admin/room/create', [RoomController::class, 'store'])->name('room.store');
Route::get('admin/filter', [RoomController::class, 'filter'])->name('room.index');
Route::resource('admin/room', RoomController::class);
Route::delete('admin/selected-room', [RoomController::class, 'deleteAll'])->name('room.delete');

// Customer Route
Route::get('admin/customer/{id}/delete', [CustomerController::class, 'destroy'])->name('customer.delete');
Route::get('admin/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('admin/customer/create', [CustomerController::class, 'store'])->name('customer.store');
Route::resource('admin/customer', CustomerController::class);
Route::delete('admin/selected-customer', [CustomerController::class, 'deleteAll'])->name('customer.delete');

// Bookings Route
Route::get('admin/booking/{id}/delete', [BookingController::class, 'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}', [BookingController::class, 'available_rooms']);
Route::get('admin/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('admin/booking/create', [BookingController::class, 'store'])->name('booking.store');
Route::resource('admin/booking', BookingController::class);
Route::delete('admin/selected-booking', [BookingController::class, 'deleteAll'])->name('booking.delete');

// Departments Route
Route::get('admin/departments/{id}/delete', [DepartmentController::class, 'destroy'])->name('departments.delete');
Route::get('admin/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('admin/departments/create', [DepartmentController::class, 'store'])->name('departments.store');
Route::resource('admin/departments', DepartmentController::class);
Route::delete('admin/selected-departments', [DepartmentController::class, 'deleteAll'])->name('departments.delete');

// Staffs Route
Route::get('admin/staff/{id}/delete', [StaffController::class, 'destroy'])->name('staff.delete');
Route::get('admin/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('admin/staff/create', [StaffController::class, 'store'])->name('staff.store');
Route::resource('admin/staff', StaffController::class);
Route::delete('admin/selected-staff', [StaffController::class, 'deleteAll'])->name('staff.delete');

// Services Route
Route::get('admin/service/{id}/delete', [ServiceController::class, 'destroy'])->name('service.delete');
Route::get('admin/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('admin/service/create', [ServiceController::class, 'store'])->name('service.store');
Route::resource('admin/service', ServiceController::class);
Route::delete('admin/selected-service', [ServiceController::class, 'deleteAll'])->name('service.delete');

// Feedbacks Route
Route::get('admin/feedbacks', [AdminController::class, 'feedbacks']);
Route::get('admin/feedbacks/{id}/delete', [AdminController::class, 'destroy_feedback'])->name('destroy_feedback.delete');
Route::delete('admin/selected-feedback', [AdminController::class, 'deleteAll'])->name('feedback.delete');
