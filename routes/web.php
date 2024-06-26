<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BawangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PredikController;
use App\Http\Controllers\UserController;
use App\Models\Customer;
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



Route::get('/', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/', [AuthController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/menuutama', [AdminController::class, 'index'])->middleware('auth');


Route::get('/menuadmin', [AdminController::class, 'menuAdmin'])->middleware('admin');

Route::get('/tambahuser', [UserController::class, 'index'])->middleware('admin');
Route::post('/tambahuser', [UserController::class, 'crud'])->middleware('admin');
Route::get('/detailuser', [UserController::class, 'show'])->middleware('admin');

Route::get('/registercustomer', [CustomerController::class, 'index'])->middleware('auth');
Route::post('/registercustomer', [CustomerController::class, 'crud']);
Route::get('/printlaporan', [CustomerController::class, 'print'])->middleware('admin');

Route::get('/datacustomer', [CustomerController::class, 'listData'])->middleware('admin');
Route::get('/datapesanan', [CustomerController::class, 'listPesanan'])->middleware('auth');

Route::get('/tambahbawang', [BawangController::class, 'index'])->middleware('admin');
Route::post('/tambahbawang', [BawangController::class, 'crud'])->middleware('admin');

Route::get('/databawang', [BawangController::class, 'listData'])->middleware('auth');

Route::get('/prediksi', [PredikController::class, 'index'])->middleware('auth');

