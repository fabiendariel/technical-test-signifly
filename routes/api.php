<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BuildTeamController;

Route::prefix('v1')->group(function () {
    Route::apiResource('/build_team', BuildTeamController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
