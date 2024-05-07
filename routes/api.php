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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('manager/customer/view',[\App\Http\Controllers\CustomerController::class, 'index']);
Route::post('owner/customer/add',[\App\Http\Controllers\CustomerController::class, 'store']);
Route::put('manager/custom/{id}/update',[\App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('manager/custom/{id}/delete',[\App\Http\Controllers\CustomerController::class, 'destroy']);

Route::get('cashier/item/view',[\App\Http\Controllers\ItemController::class, 'index']);
Route::post('owner/item/add',[\App\Http\Controllers\ItemController::class, 'store']);
Route::put('cashierr/item/{id}/update',[\App\Http\Controllers\ItemController::class, 'update']);
Route::delete('cashier/item/{id}/delete',[\App\Http\Controllers\ItemController::class, 'destroy']);

