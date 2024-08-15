<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayPlanController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::apiResource('holiday-plans', HolidayPlanController::class);
    Route::post('holiday-plans/{holiday_plan}/generate-pdf', [HolidayPlanController::class, 'generatePdf']);
});
