<?php

use App\Http\Controllers\AdditionalStructureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpaceController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/rooms', [SpaceController::class, 'index'])->name('rooms.index');
Route::get('/room/{id}', [SpaceController::class, 'getByIdRoom'])->name('rooms.getByIdRoom');
Route::post('/room/{id}', [SpaceController::class, 'store'])->name('rooms.store');
Route::get('/pages/success', [SpaceController::class, 'success'])->name('pages.success');