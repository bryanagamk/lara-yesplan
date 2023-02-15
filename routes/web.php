<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;
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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/todos/create', [TodoController::class, 'create'])->name('tambah-todo')->middleware('auth');
Route::post('/todos/store', [TodoController::class, 'store'])->name('simpan-todo')->middleware('auth');
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('edit-todo')->middleware('auth');
Route::post('/todos/{id}/update', [TodoController::class, 'update'])->name('update-todo')->middleware('auth');
Route::get('/todos/{id}/delete', [TodoController::class, 'delete'])->name('delete-todo')->middleware('auth');
