<?php

use App\Http\Controllers\RestAPI\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('Employee', EmployeeController::class);

Route::get('/Employee', [EmployeeController::class, 'index']);
Route::get('/Employee/{id}', [EmployeeController::class, 'index']);
Route::post('/Employee', [EmployeeController::class, 'store']);
Route::put('/Employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/Employee/{id}', [EmployeeController::class, 'destroy']);