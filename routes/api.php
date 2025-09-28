<?php

use App\Http\Controllers\Api\ApiPostController;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', ApiPostController::class)
    ->middleware('auth:sanctum');
