<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BawangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
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



Route::get('/', [AdminController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');



Route::get('/menuadmin', [AdminController::class, 'menuAdmin'])->middleware('auth');

Route::get('/tambahuser', [UserController::class, 'index'])->middleware('auth');
Route::post('/tambahuser', [UserController::class, 'crud'])->middleware('auth');
Route::get('/detailuser', [UserController::class, 'show'])->middleware('auth');

Route::get('/registercustomer', [CustomerController::class, 'index']);
Route::post('/registercustomer', [CustomerController::class, 'crud']);

Route::get('/datacustomer', [CustomerController::class, 'listData'])->middleware('auth');

Route::get('/tambahbawang', [BawangController::class, 'index']);
Route::post('/tambahbawang', [BawangController::class, 'crud']);

Route::get('/databawang', [BawangController::class, 'listData'])->middleware('auth');
