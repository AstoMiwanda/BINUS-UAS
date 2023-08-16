<?php

use App\Http\Controllers\RoomController;
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
    return view('auth.login');
});

Route::middleware(['auth', 'role:staff,admin'])->group(function () {
    Route::get('/room', [RoomController::class, 'list'])->name('room.list');
    Route::get('/room/add', [RoomController::class, 'add'])->name('room.add');
    Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
    Route::post('/room/update/{id}', [RoomController::class, 'update'])->name('room.update');
    Route::get('/room/delete/{id}', [RoomController::class, 'delete'])->name('room.delete');
    Route::get('/room/{id}', [RoomController::class, 'view'])->name('room.view');
    Route::post('/room', [RoomController::class, 'store'])->name('room.store');
});
require __DIR__.'/auth.php';
