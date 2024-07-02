<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildTeamController;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;

Route::get('/', [BuildTeamController:: class, 'index'])->name('index');
Route::post('/submit-form', [BuildTeamController::class, 'submitForm'])->middleware([HandlePrecognitiveRequests::class]);
