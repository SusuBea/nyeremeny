<?php

use App\Http\Controllers\BrandController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::get('brands', [BrandController::class, 'index']);
Route::get('brands/{id}', [BrandController::class, 'show']);
Route::put('brands/{id}', [BrandController::class, 'update']);
Route::post('brands', [BrandController::class, 'store']);
Route::delete('brands/{id}', [BrandController::class, 'destroy']);