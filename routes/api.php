<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::post('add-task', [TaskController::class, "addTask"]);

Route::get('task-list', [TaskController::class, "getTasks"]);

Route::post('update-task/{id}', [TaskController::class, "upadateTask"]);
