<?php

use App\Http\Controllers\HomeController;
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
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/event/{slug}', [HomeController::class, 'detail'])->name('event.detail');
Route::post('/order/{slug}', [HomeController::class, 'createOrder'])->name('order.store');