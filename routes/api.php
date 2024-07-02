<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\ProjectController;
use App\Http\Controllers\Api\V1\SkillController;

Route::prefix('v1')->group(function () {
    Route::apiResource('employees', EmployeeController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('skills', SkillController::class);

    Route::post('skills/bulk', ['uses' => 'SkillController@bulkStore']);
    Route::post('projects/bulk', ['uses' => 'ProjectController@bulkStore']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
