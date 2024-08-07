<?php

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
