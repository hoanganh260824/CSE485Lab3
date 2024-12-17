<?php

use App\Http\Controllers\Taskcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [taskcontroller::class, 'index']);
Route::resource('tasks', TaskController::class);
