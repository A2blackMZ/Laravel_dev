<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Models\Room;

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

Route::get('/rooms', [RoomController::class, 'index'])->name('room.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('room.create');
Route::post('/room', [RoomController::class, 'store'])->name('room.store');
Route::get('/room/{room}/edit', [RoomController::class, 'edit'])->name('room.edit');
Route::put('/room/{room}/update', [RoomController::class, 'update'])->name('room.update');
Route::delete('/room/{room}/destroy', [RoomController::class, 'destroy'])->name('room.destroy');

//Admin Routes

Route::get('/admin/create', [adminController::class, 'create'])->name('admin.create');
//Route::get('/admin/showconnexionform', [adminController::class, 'showconnexionform'])->name('admin.adminregister');
Route::get('/admin/admindashboard', [adminController::class, 'admindashboard'])->name('admin.admindashboard');
Route::post('/admin', [adminController::class, 'store'])->name('admin.store');
Route::post('/admin/connexion', [adminController::class, 'connexion'])->name('admin.connexion');
Route::get('/admin/adminloginform', [adminController::class, 'adminloginform'])->name('admin.adminloginform');

