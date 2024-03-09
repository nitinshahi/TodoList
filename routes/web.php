<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('edit');
})->name('test');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/signup', [UserController::class, 'create'])->name('signup');
Route::post('/signup', [UserController::class, 'store'])->name('signup');


Route::get('/todo', [TodoController::class, 'index'])->name('todo')->middleware('auth');
Route::get('/list-task', [TodoController::class, 'alltask'])->name('list-task')->middleware('auth');
Route::get('/add-task', [TodoController::class, 'create'])->name('add-task')->middleware('auth');
Route::post('/add-task', [TodoController::class, 'store'])->name('add-task')->middleware('auth');

Route::get('/list-task/{todo}/edit', [TodoController::class, 'edit'])->name('edit-task')->middleware('auth');
Route::post('/list-task/{todo}/update', [TodoController::class, 'update'])->name('update-task')->middleware('auth');
Route::delete('/list-task/{todo}/destroy', [TodoController::class, 'destroy'])->name('delete')->middleware('auth');;
