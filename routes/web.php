<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomtypeController;
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

// RoomType Routes
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy'])->name('roomtype.delete');
Route::get('admin/roomtype/create', [RoomtypeController::class, 'create'])->name('roomtype.create');
Route::post('admin/roomtype/create', [RoomtypeController::class, 'store'])->name('roomtype.store');
Route::resource('admin/roomtype', RoomtypeController::class);

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
