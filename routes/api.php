<?php

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

/*Route::prefix('v1')->group(function () {
    // PUBLIC ROUTE
    Route::get('/post/{slug}', [HomeController::class, 'index']);

    // Auth
    Route::get('/auth/register', [AuthController::class, 'register']);
    Route::get('/auth/login', [AuthController::class, 'login']);

    // PRIVATE ROUTE
    Route::group(['middleware' => 'auth:sanctum'], function(){
        //auth
        Route::get('/auth/logout', [AuthController::class, 'logout']);


        //rol client
        Route::apiResource('/client/instructor', [InstructorController::class, 'logout']);

        //rol admin
        Route::apiResource('/ad/instructor', [InstructorController::class, 'logout']);
    });
    // Route::get('/post/{slug}', [CursoController::class, 'index']);
});*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
