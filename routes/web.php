<?php

use App\Http\Controllers\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
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

Route::get('/', [GuestHomeController::class, 'home'])->name('guests.home');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [AdminHomeController::class, 'home'])->name('admin.home');
});
