<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payments\mpesa\MPESAController;
use App\Http\Controllers\payments\mpesa\MPESAResponsesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/access-token', [MPESAController::class, 'getAccessToken'])->name('access.token');
Route::post('/validation',[MPESAResponsesController::class, 'validation']);
Route::post('/confirmation', [MPESAResponsesController::class, 'confirmation']);