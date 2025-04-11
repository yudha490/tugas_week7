<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MissionController;
use App\Http\Controllers\Api\UserMissionController;
use App\Http\Controllers\Api\SubmissionController;

Route::post('/api/register', [apiController::class, 'register']);
Route::post('/api/login', [apiController::class, 'login']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/missions', [MissionController::class, 'index']);
Route::post('/user-missions', [UserMissionController::class, 'store']);
Route::patch('/user-missions/{id}', [UserMissionController::class, 'update']);
Route::post('/submissions', [SubmissionController::class, 'store']);