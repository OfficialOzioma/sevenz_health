<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return response()->json([
        'success' => false,
        'message' => 'Please provide the authentication token'
    ], 403);
})->name('login');


Route::post('/signin', [UserController::class, 'signin']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/tests', [UserController::class, 'index']);
    Route::post('/tests/store', [UserController::class, 'store']);
});
