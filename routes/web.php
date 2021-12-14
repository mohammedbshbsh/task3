<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/' , [TasksController::class , 'index'])->name('index');
Route::post('/store' , [TasksController::class , 'store']);
Route::get('/edit/task/{id}', [TasksController::class,'edit']);
Route::put('/update/task/{id}', [TasksController::class,'update'])->name('update');
Route::get('/delete/task/{id}', [TasksController::class,'destroy']);

