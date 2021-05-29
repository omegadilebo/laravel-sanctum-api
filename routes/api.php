<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthController;
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

// Route::resource('products', ProductController::class);

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/applicants', [ApplicantController::class, 'index']);
Route::get('/applicants/{id}', [ApplicantController::class, 'show']);
Route::get('/applicants/search/{name}', [ApplicantController::class, 'search']);


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/applicants', [ApplicantController::class, 'store']);
    Route::put('/applicants/{id}', [ApplicantController::class, 'update']);
    Route::delete('/applicants/{id}', [ApplicantController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
